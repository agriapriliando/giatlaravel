<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organization;
use App\Models\Employee;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        // return $user;
        return view('user.list', compact('user'));
    }

    public function employeeac(Request $request)
    {
        // $cari = "Agri Apriliando";
        $datas = Employee::select("id","name")
                ->where("name","LIKE", '%'.$request->get('query').'%')->distinct()
                ->get();
        // return $datas;
        $dataModified = array();
        foreach ($datas as $data)
        {
            $dataModified[] = array("id"=>$data->id,"label"=>$data->name);
        }
        return response()->json($dataModified);
    }

    public function useradd()
    {
        $org = Organization::all();
        return view('user.add', compact('org'));
    }

    public function useraddProcess(Request $request)
    {
        $user = new User;
        $user->organization_id = $request->organization_id;
        $user->employee_id = $request->employee_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make('iakn2021');
        $user->role = $request->role;
        $user->save();

        return redirect('/user')->with('status','Akun berhasil ditambahkan');

    }

    public function useredit($id)
    {
        $user = User::find($id);
        $org = Organization::all();
        $emp = Employee::all();
        return view('user.edit', compact('user','org','emp'));
    }

    public function usereditProcess($id, Request $request)
    {
        $user = User::find($id);
        $user->employee_id = $request->employee_id;
        $user->organization_id = $request->organization_id;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();

        return redirect('user')->with('status','Akun Berhasil dirubah');;
    }

    public function userPass($id)
    {
        $user = User::find($id);
        return view('user.pass', compact('user'));
    }

    public function userPassProcess($id, Request $request)
    {
        $user = User::find($id);
        if($request->filled('password')) {
            $user->password = Hash::make($request->password);
        } else {
            $user->password = Hash::make('iakn2021');
        }
        $user->save();

        return redirect('/user')->with('status','Password berhasil dirubah');
    }

    public function userDelete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/user')->with('status','Akun berhasil dihapus');
    }

}
