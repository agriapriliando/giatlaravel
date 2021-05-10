<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\Organization;

class UnitController extends Controller
{
    public function unitlist()
    {
        $unit = Unit::with('organization')->get();
        return view('unit.list', compact('unit'));
    }

    public function unitadd()
    {
        $org = Organization::all();
        return view('unit.add', compact('org'));
    }

    public function unitaddProcess(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5'
        ]);

        $unit = new Unit;
        $unit->title = $request->title;
        $unit->organization_id = $request->organization_id;
        $unit->desc = $request->desc;
        $unit->level = $request->level;
        $unit->save();

        return redirect('unit')->with('success', 'Unit berhasil ditambahkan');
    }

    public function unitedit($id)
    {
        $unit = Unit::find($id);
        $org = Organization::all();
        return view('unit.edit', compact('unit','org'));
    }

    public function uniteditProcess($id, Request $request)
    {
        $unit = Unit::find($id);
        $unit->title = $request->title;
        $unit->organization_id = $request->organization_id;
        $unit->desc = $request->desc;
        $unit->level = $request->level;
        $unit->save();

        return redirect('/unit')->with('status','Data berhasil dirubah');
    }
}
