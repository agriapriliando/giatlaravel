<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Organization;
use App\Models\Employee;

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

}
