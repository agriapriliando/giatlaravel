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

        $act = Work::where('user_id', $ses_id)->whereMonth('created_at',$bulan)->get();
        return view('dashboard', compact('act','bulaniniupper','tgl'));
    }

}
