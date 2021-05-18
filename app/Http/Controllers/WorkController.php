<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Leader;
use App\Models\User;
use App\Models\Unit;
use App\Models\Organization;
use App\Models\Work;

class WorkController extends Controller
{
    public function actlist()
    {
        $ses_id = session('id');
        $act = Work::where('user_id', $ses_id)->get();
        return view('work.list', compact('act'));
    }

    public function actdetail($id)
    {
        $act = Work::find($id);
        return view('work.detail', compact('act'));
    }

    public function actadd()
    {
        return view('work.add');
    }

    public function actaddProcess(Request $request)
    {
        $ses_id = session('id');
        $ses_org = session('id');
        $emp = Employee::find($ses_id);
        $unit_user = $emp->unit->id;

        $act = new Work;
        $act->user_id = $ses_id;
        $act->unit_id = $unit_user;
        $act->organization_id = $ses_org;
        $act->title = $request->title;
        $act->desc = $request->desc;
        $act->qty = $request->qty;
        $act->qtyunit = $request->qtyunit;
        $act->save();

        return redirect('/act')->with('status', 'Kegiatan Berhasil ditambahkan');
    }

    public function actedit($id)
    {
        $ses_id = session('id');
        $ses_org = session('id');
        $emp = Employee::find($ses_id);
        $unit_user = $emp->unit->id;
        $act = Work::find($id);
        return view('work.edit', compact('act'));
    }

    public function acteditProcess($id, Request $request)
    {
        $ses_id = session('id');
        $ses_org = session('id');
        $emp = Employee::find($ses_id);
        $unit_user = $emp->unit->id;

        $act = Work::find($id);
        $act->user_id = $ses_id;
        $act->unit_id = $unit_user;
        $act->organization_id = $ses_org;
        $act->title = $request->title;
        $act->desc = $request->desc;
        $act->qty = $request->qty;
        $act->qtyunit = $request->qtyunit;
        $act->created_at = $request->created_at;
        $act->save();

        return redirect('/act')->with('status', 'Kegiatan Berhasil dirubah');
    }

    public function actDelete($id)
    {
        $act = Work::find($id);
        $act->delete();

        return redirect('/act')->with('status', 'Data Kegiatan Berhasil dihapus');
    }

}