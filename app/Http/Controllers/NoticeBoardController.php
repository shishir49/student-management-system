<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeBoardController extends Controller
{
    public function index() 
    {
        return view('dashboard.superAdmin.noticeBoard.list');
    }

    public function create() 
    {
        return view('dashboard.superAdmin.noticeBoard.create');
    }
}
