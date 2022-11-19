<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function index() 
    {
        return view('dashboard.superAdmin.certificate.list');
    }

    public function create() 
    {
        return view('dashboard.superAdmin.certificate.create');
    }
}
