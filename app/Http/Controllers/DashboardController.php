<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('ceklogin');
    }

    public function index()
    {
        $ses_id = session('id');

        // $bulanini = Carbon::today()->format('F Y');
        $bulan = Carbon::today()->month;
        $bulanlalu = Carbon::now()->subMonth()->month;
        $bulanini = Carbon::now()->isoFormat('MMMM Y');
        $tgl = Carbon::now()->isoFormat('D MMMM Y');
        $bulaniniupper = Str::of($bulanini)->upper();
        
        $act = Work::where('user_id', $ses_id)->whereMonth('created_at',$bulan)->orderBy('created_at')->get();
        return view('dashboard', compact('act','bulaniniupper','tgl'));
    }
    
    public function worksall()
    {
        $ses_id = session('id');
        $hariini = Carbon::today()->toDateString();
        //membuat tanggal $hariini = Carbon::createFromDate(2021, 04, 29)->toDateString();

        $bulan = Carbon::today()->month;
        $bulanlalu = Carbon::now()->subMonth()->month;
        $bulanini = Carbon::now()->isoFormat('MMMM Y');
        $tgl = Carbon::now()->isoFormat('D MMMM Y');
        $bulaniniupper = Str::of($bulanini)->upper();

        $act = Work::with('user.employee')->whereDate('created_at',$hariini)->orderBy('created_at')->get();

        return view('work.listall', compact('act','bulaniniupper','tgl'));
    }

    public function workspeg()
    {
        $ses_id = session('id');

        $bulan = Carbon::today()->month;
        $bulanlalu = Carbon::now()->subMonth()->month;
        $bulanini = Carbon::now()->isoFormat('MMMM Y');
        $tgl = Carbon::now()->isoFormat('D MMMM Y');
        $bln = Carbon::now()->isoFormat('MMMM Y');
        $bulaniniupper = Str::of($bulanini)->upper();

        $act = Work::with('user.employee')->whereMonth('created_at',$bulan)->orderBy('created_at')->get();

        return view('work.listall_peg', compact('act','bulaniniupper','tgl','bln'));
    }

}
