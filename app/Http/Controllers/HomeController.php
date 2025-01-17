<?php

namespace App\Http\Controllers;
use App\Models\home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $homes = home::all();
        return view('home.index', ['homes' => $homes]);
    }

    public function create()
    {
        return view('home.create');
    }

    public function store(Request $request)
    {
        home::create([
            'title_1' => $request->title,
            'title_2' => $request->title,
            'focus_title' => $request->focus_title,
            'description' => $request->home
        ]);
        return redirect()->route('home');
    }

    public function destroy($id)
    {
        $checkData = home::where('id', $id)->first();
        $checkData->delete();
        return redirect()->route('home');
    }


    public function edit($id)
    {
        $home = home::findOrFail($id);
        return view('home.edit', ['home' => $home]);
    }


    public function update(Request $request, $id)
    {
        $home = home::findOrFail($id);
        $home->update([
            'title_1' => $request->title,
            'title_2' => $request->title,
            'focus_title' => $request->focus_title,
            'image' => $request->image,
            'description' => $request->home
        ]);
        return redirect()->route('home');
    }
}
