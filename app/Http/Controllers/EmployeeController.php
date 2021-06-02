<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Leader;
use App\Models\User;
use App\Models\Unit;
use App\Models\Organization;

use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    public function emp()
    {
        return view('employee.myprofile');
    }

    public function emplist()
    {
        $emp = Employee::all();
        return view('employee.list', compact('emp'));
    }

    public function empadd()
    {
        $unit = Unit::all();
        $ld = Leader::all();
        $org = Organization::all();
        return view('employee.add',compact('unit','ld','org'));
    }

    public function empaddProcess(Request $request)
    {
        $request->validate([
            'name' => 'required|min:5|unique:employees',
            'nip' => 'unique:employees',
        ]);

        $ses_id = session('id');

        $emp = new Employee;
        $emp->user_id = $ses_id;
        $emp->unit_id = $request->unit_id;
        $emp->leader_id = $request->leader_id;

        $org_id = Unit::where('id', $request->unit_id)->first();
        $emp->organization_id = $org_id->organization_id;
        if($request->filled('nip')) {
            $emp->nip = $request->nip;
        } else {
            $emp->nip = '-';
        }
        $emp->name = $request->name;
        $emp->job = $request->job;
        $emp->contact = $request->contact;
        $emp->save();

        return redirect('/emp/list')->with('status','Data Pegawai berhasil ditambahkan');
    }

    public function empedit($id)
    {
        $emp = Employee::find($id);
        $unit = Unit::all();
        $ld = Leader::all();
        $org = Organization::all();
        return view('employee.edit', compact('emp','unit','ld','org'));
    }

    public function empeditProcess($id, Request $request)
    {
        // id admin yang melakukan edit terakhir
        $ses_id = session('id');

        $emp = Employee::find($id);
        $emp->user_id = $ses_id;
        $emp->unit_id = $request->unit_id;
        $emp->leader_id = $request->leader_id;
        
        $org_id = Unit::where('id', $request->unit_id)->first();
        $emp->organization_id = $org_id->organization_id;
        if($request->filled('nip')) {
            $emp->nip = $request->nip;
        } else {
            $emp->nip = 'Honorer';
        }
        $emp->name = $request->name;
        $emp->job = $request->job;
        $emp->contact = $request->contact;
        $emp->save();

        return redirect('/emp/list')->with('status','Data Pegawai berhasil dirubah');
    }

    public function empDelete($id)
    {
        $emp = Employee::find($id);
        $emp->delete();

        return redirect('/emp/list')->with('status','Data Pegawai berhasil dihapus');
    }   

}
