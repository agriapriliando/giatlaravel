<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function actlist()
    {
        return view('activity.list');
    }

    public function actdetail()
    {
        return view('activity.detail');
    }

    public function actadd()
    {
        return view('activity.add');
    }

    public function actedit()
    {
        return view('activity.edit');
    }
}
