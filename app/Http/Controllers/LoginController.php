<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Employee;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $login_type = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL ) 
        ? 'email' 
        : 'name';

        $request->merge([
            $login_type => $request->input('login')
        ]);
        // $credentials = $request->only('email', 'password');
        $credentials = $request->only($login_type, 'password');

        if (Auth::attempt($credentials)) {
            if (filter_var($login_type) == 'email') {
                $users = DB::table('users')->where('email', $request->input('login'))->first();
            } else {
                $users = DB::table('users')->where('name', $request->input('login'))->first();
            }
            // return $users;
            $emp = Employee::where('id',$users->employee_id)->first();
            if($users->role == 1) {
                session([
                    'user' => 'admin',
                    'emp' => $emp->name,
                    'id' => $users->id,
                    'org' => $users->organization_id
                    ]);
                return redirect('dashboard');
            } elseif($users->role == 2) {
                session([
                    'user' => 'pegawai',
                    'emp' => $emp->name,
                    'id' => $users->id,
                    'org' => $users->organization_id
                    ]);
                return redirect('dashboard');
            } elseif($users->role == 0) {
                session([
                    'user' => 'superadmin',
                    'id' => $users->id,
                    'org' => $users->organization_id
                    ]);
                return redirect('dashboard');
            }
        }

        return redirect('/login')->with('status','Email atau password salah');
    }

    public function logout(Request $request)
    {
        // $request->session()->forget('user'); untuk menghapus id user pada session
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->flush();
        $request->session()->regenerateToken();
        return redirect('');
    }
}
