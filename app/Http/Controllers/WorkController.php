<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Leader;
use App\Models\User;
use App\Models\Unit;
use App\Models\Organization;
use App\Models\Work;

use Illuminate\Support\Facades\DB;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceklogin');
    }

    public function actlist()
    {
        $ses_id = session('id');
        $act = Work::where('user_id', $ses_id)->orderByDesc('created_at')->get();
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

    public function autocomplete(Request $request)
    {
        $datas = Work::select("title")
                ->where("title","LIKE", '%'.$request->get('query').'%')->distinct()
                ->get();
        $dataModified = array();
        foreach ($datas as $data)
        {
            $dataModified[] = $data->title;
        }
        return response()->json($dataModified);
    }

    public function actaddProcess(Request $request)
    {
        $ses_id = session('id');
        $ses_org = session('org');
        $emp = Employee::find($ses_id);
        $unit_user = $emp->unit->id;
        
        $act = new Work;
        $act->user_id = $ses_id;
        $act->unit_id = $unit_user;
        $act->organization_id = $ses_org;
        $act->title = $request->title;
        $act->detail = $request->detail;
        $act->qty = $request->qty;
        $act->qtyunit = $request->qtyunit;
        DB::transaction(function () use ($act) {
            $act->save();
        });

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
        $act->detail = $request->detail;
        $act->qty = $request->qty;
        $act->qtyunit = $request->qtyunit;
        $act->created_at = $request->created_at;
        DB::transaction(function () use ($act) {
            $act->save();
        });

        return redirect('/act')->with('status', 'Kegiatan Berhasil dirubah');
    }

    public function actDelete($id)
    {
        $act = Work::find($id);
        $act->delete();

        return redirect('/act')->with('status', 'Data Kegiatan Berhasil dihapus');
    }

}
