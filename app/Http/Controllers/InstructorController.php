<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    public function index() 
    {
        return view('dashboard.superAdmin.instructor.list');
    }

    public function create() 
    {
        return view('dashboard.superAdmin.instructor.create');
    }
}
