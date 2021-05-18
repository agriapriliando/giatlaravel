<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        return view('report.list');
    }

    public function monthly()
    {
        return view('report.monthly');
    }

    public function daily()
    {
        return view('report.daily');
    }
}
