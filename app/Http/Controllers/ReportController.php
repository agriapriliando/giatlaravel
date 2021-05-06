<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function monthly()
    {
        return view('report.monthly');
    }

    public function daily()
    {
        return view('report.daily');
    }
}
