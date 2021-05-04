<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function unitlist()
    {
        return view('unit.list');
    }

    public function unitadd()
    {
        return view('unit.add');
    }

    public function unitedit()
    {
        return view('unit.edit');
    }
}
