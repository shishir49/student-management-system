<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    public function index() 
    {
        return view('dashboard.superAdmin.schedule.list');
    }

    public function class() 
    {
        return view('dashboard.superAdmin.schedule.class');
    }

    public function classTest() 
    {
        return view('dashboard.superAdmin.schedule.class-test');
    }

    public function exam() 
    {
        return view('dashboard.superAdmin.schedule.exam');
    }

    public function result() 
    {
        return view('dashboard.superAdmin.schedule.result');
    }
}
