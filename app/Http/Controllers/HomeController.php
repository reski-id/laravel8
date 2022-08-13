<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function karya()
    {
        return view('karya');
    }

    public function sertifikat()
    {
        return view('sertifikat');
    }
}
