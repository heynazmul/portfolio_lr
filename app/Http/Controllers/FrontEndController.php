<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;
use App\Models\About;
use App\Models\Resume;
use App\Models\Service;

class FrontEndController extends Controller
{
    public function home()
    {
        $homes = Home::where('status', 1)->get();
        $abouts = About::where('status', 1)->get();
        $resumes = Resume::where('status', 1)->get();
        $services = Service::where('status', 1)->get();
        $serviceTitle = Service::where('type', 'title')->first();
        return view('frontend.index', [
            'homes' => $homes,
            'abouts' => $abouts,
            'resumes' => $resumes,
            'services' => $services,
            'serviceTitle' => $serviceTitle
        ]);
    }
}
