<?php

namespace App\Http\Controllers;

use App\Models\About;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index()
    {
        $rows = About::get();
        return view('about.index', ['rows' => $rows]);
    }
    public function create()
    {
        return view('about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'focus_title' => 'required|string|max:255',
            'description' => 'nullable|string|min:3|max:255'
        ], [
            'title.required' => ' required.',
            'focus_title.required' => ' required.',
            'description.required' => ' required.',
        ]);

        About::create([
            'title' => $request->title,
            'focus_title' => $request->focus_title,
            'description' => $request->description
        ]);
        return redirect()->route('about');
    }

    public function destroy($id)
    {
        $checkData = About::where('id', $id)->first();
        if ($checkData) {
            $checkData->delete();
        }
        return redirect()->route('about');
    }


    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('about.edit', ['about' => $about]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'focus_title' => 'required|string|max:255',
            'description' => 'nullable|string|min:3|max:255'
        ], [
            'title.required' => ' required.',
            'focus_title.required' => ' required.',
            'description.required' => ' required.',
        ]);

        $about = About::findOrFail($id);
        $about->update([
            'title' => $request->title,
            'focus_title' => $request->focus_title,
            'description' => $request->description
        ]);
        return redirect()->route('about');
    }

    public function status($id)
    {
        $checkData = About::where('id', $id)->first();
        if ($checkData) {
            if ($checkData->status == 0) {
                $checkData->update(['status' => 1]);
            } else {
                $checkData->update(['status' => 0]);
            }
        }
        return redirect()->route('about');
    }
}
