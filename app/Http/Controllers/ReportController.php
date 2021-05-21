<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function report()
    {
        $ses_id = session('id');        
        $listmonths = Work::selectRaw("MONTH(created_at) as listmonth")->distinct()->get();
        $listyears = Work::selectRaw("YEAR(created_at) as listyear")->distinct()->get();
        return view('report.list', compact('listmonths','listyears'));
    }

    public function daily(Request $request)
    {
        $ses_id = session('id');
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $date = $request->tanggal;
        $tanggal = Carbon::createFromFormat('Y-m-d', $date);
        $work = Work::where('user_id',$ses_id)->whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get();
        $profil = Employee::where('user_id', $ses_id)->first();

        return view('report.daily', compact('bulan', 'tahun', 'work', 'profil', 'tanggal'));
    }

    public function monthly(Request $request)
    {
        $ses_id = session('id');
        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $date = $request->tanggal;
        $tanggal = Carbon::createFromFormat('Y-m-d', $date);
        $work = Work::where('user_id',$ses_id)->whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)->get();
        $profil = Employee::where('user_id', $ses_id)->first();
        
        // sum jumlah bygroup title
        $works = Work::where('user_id',$ses_id)->whereMonth('created_at', $bulan)->whereYear('created_at', $tahun)
        ->groupBy('title')
        ->selectRaw('title, sum(qty) as sum, qtyunit')->get();
        // ->pluck('sum','title');

        return view('report.monthly', compact('bulan', 'tahun', 'work', 'works', 'profil', 'tanggal'));
    }

}
