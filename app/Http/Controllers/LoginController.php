<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $users = DB::table('users')->where('email', $request->email)->first();
            if($users->role == 1) {
                session([
                    'user' => 'admin',
                    'id' => $users->id,
                    'org' => $users->organization_id
                    ]);
                return redirect('dashboard');
            } elseif($users->role == 2) {
                session([
                    'user' => 'pegawai',
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
