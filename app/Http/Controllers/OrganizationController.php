<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function orglist()
    {
        return view('organization.list');
    }

    public function orgadd()
    {
        return view('organization.add');
    }

    public function orgedit()
    {
        return view('organization.edit');
    }
}
