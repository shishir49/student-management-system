<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() 
    {
        return view('dashboard.superAdmin.student.list');
    }

    public function create() 
    {
        return view('dashboard.superAdmin.student.enroll');
    }
}
