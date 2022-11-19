<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index() 
    {
        return view('dashboard.superAdmin.batch.list');
    }

    public function create() 
    {
        return view('dashboard.superAdmin.batch.create');
    }
}
