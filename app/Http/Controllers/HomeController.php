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
        $request->validate([
            'title_1' => 'required|string|max:255',
            'title_2' => 'required|string|max:255',
            'focus_title' => 'required|string|max:255',
            'description' => 'nullable|string|min:3|max:255'
        ]);

        home::create([
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'focus_title' => $request->focus_title,
            'description' => $request->description
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

        $request->validate([
            'title_1' => 'required|string|min:3|max:255',
            'title_2' => 'required|string|min:3|max:255',
            'focus_title' => 'required|string|min:3|max:255',
            'description' => 'nullable|string|min:3|max:255'
        ], [
            'title_1.required' => ' required.',
            'title_2.required' => ' required.',
            'focus_title.required' => ' required.',
            'description.required' => ' required.',
        ]);


        $home->update([
            'title_1' => $request->title_1,
            'title_2' => $request->title_2,
            'focus_title' => $request->focus_title,
            'description' => $request->description
        ]);
        return redirect()->route('home');
    }

    public function status($id)
    {
        $checkData = home::where('id', $id)->first();
        if ($checkData->status == 0) {
            $checkData->update(['status' => 1]);
        } else {
            $checkData->update(['status' => 0]);
        }
        return redirect()->route('home');
    }
}
