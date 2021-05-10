<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leader;
use App\Models\Organization;

class LeaderController extends Controller
{
    public function list()
    {
        $ld = Leader::all();
        return view('leader.list', compact('ld'));
    }

    public function leaderadd()
    {
        $org = Organization::all();
        return view('leader.add', compact('org'));
    }

    public function leaderaddProcess(Request $request)
    {
        $ses_id = session('id');
        $ld = new Leader;
        $ld->organization_id = $request->organization_id;
        $ld->user_id = $ses_id;
        $ld->nip = $request->nip;
        $ld->name = $request->name;
        $ld->job = $request->job;
        $ld->save();

        return redirect('leader')->with('status', 'Atasan Langsung berhasil ditambahkan');
    }

    public function leaderedit($id)
    {
        $ld = Leader::find($id);
        $org = Organization::all();
        return view('leader.edit', compact('ld','org'));
    }

    public function leadereditProcess($id, Request $request)
    {
        $ses_id = session('id');
        $ld = Leader::find($id);
        $ld->organization_id = $request->organization_id;
        $ld->user_id = $ses_id;
        $ld->nip = $request->nip;
        $ld->name = $request->name;
        $ld->job = $request->job;
        $ld->save();

        return redirect('leader')->with('status', 'Atasan Langsung berhasil ditambahkan');
    }

    public function leaderDelete($id)
    {
        $ld = Leader::find($id);
        $ld->delete();

        return redirect('/leader')->with('status', 'Data Atasan Langsung Berhasil dihapus');
    }

}
