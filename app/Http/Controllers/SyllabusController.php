<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SyllabusController extends Controller
{
    public function index() 
    {
        return view('dashboard.superAdmin.syllabus.list');
    }

    public function create() 
    {
        return view('dashboard.superAdmin.syllabus.create');
    }
}
