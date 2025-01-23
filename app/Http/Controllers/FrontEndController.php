<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;
use App\Models\About;
use App\Models\Resume;

class FrontEndController extends Controller
{
    public function home()
    {
        $homes = Home::where('status', 1)->get();
        $abouts = About::where('status', 1)->get();
        $resumes = Resume::where('status', 1)->get();
        return view('frontend.index', [
            'homes' => $homes,
            'abouts' => $abouts,
            'resumes' => $resumes,
        ]);
    }
}
