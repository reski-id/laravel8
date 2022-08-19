<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sertifikat;
use App\Models\Course;
use App\Models\Portofolio;

class HomeController extends Controller
{
    public function index()
    {
        $certi = Sertifikat :: all();

        $course = Course :: all();

        $porto = Portofolio ::all();

        return view('welcome', compact('certi','course', 'porto'));
    }

    public function about()
    {
        return view('about');
    }

    public function portofolio()
    {
        return view('portofolio');
    }

    public function sertifikat()
    {
        return view('sertifikat');
    }
}
