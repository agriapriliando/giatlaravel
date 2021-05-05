<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function emp()
    {
        return view('employee.myprofile');
    }

    public function emplist()
    {
        return view('employee.list');
    }
}
