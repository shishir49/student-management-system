<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() 
    {
        return view('dashboard.superAdmin.course.list');
    }

    public function create() 
    {
        return view('dashboard.superAdmin.course.create');
    }
}
