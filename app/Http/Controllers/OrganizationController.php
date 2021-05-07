<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationController extends Controller
{
    public function orglist()
    {
        $org = Organization::all();
        return view('organization.list', compact('org'));
    }

    public function orgadd()
    {
        return view('organization.add');
    }

    public function orgaddProcess(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5'
        ]);

        $org = new Organization;
        $org->title = $request->title;
        $org->desc = $request->desc;
        $org->save();

        return redirect('/org')->with('status','Data Organisasi Berhasil Ditambah');
    }

    public function orgDelete($id)
    {
        $org = Organization::find($id);
        $org->delete();

        return redirect('/org')->with('status','Data Organisasi Berhasil Dihapus');
    }

    public function orgedit($id)
    {
        $org = Organization::find($id);
        
        return view('organization.edit', compact('org'));
    }

    public function orgeditProcess($id, Request $request)
    {
        $org = Organization::find($id);
        $org->title = $request->title;
        $org->desc = $request->desc;
        $org->save();

        return redirect('/org')->with('status','Data Berhasil Dirubah');
    }
}
