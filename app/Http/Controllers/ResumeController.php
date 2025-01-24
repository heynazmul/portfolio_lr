<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resumes = Resume::all();
        return view('resume.index', ['resumes' => $resumes]);
    }

    public function create()
    {
        return view('resume.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'nullable|string|max:255',
            'working_years' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'Agency_name' => 'required|string|max:255'
        ], [
            'title.required' => ' ',
            'working_years.required' => ' required.',
            'position.required' => ' required.',
            'Agency_name.required' => ' required.',
        ]);
        Resume::create([
            'title' => $request->title,
            'working_years' => $request->working_years,
            'position' => $request->position,
            'Agency_name' => $request->Agency_name

        ]);
        return redirect()->route('resume');
    }


    public function destroy($id)
    {
        $checkData = Resume::where('id', $id)->first();
        $checkData->delete();
        return redirect()->route('resume');
    }


    public function edit($id)
    {
        $resume = Resume::findOrFail($id);
        return view('resume.edit', ['resume' => $resume]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'working_years' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'Agency_name' => 'required|string|max:255'
        ], [
            'title.required' => ' .',
            'working_years.required' => ' required.',
            'position.required' => ' required.',
            'Agency_name.required' => ' required.',
        ]);

        $resume = Resume::findOrFail($id);
        $resume->update([
            'title' => $request->title,
            'working_years' => $request->working_years,
            'position' => $request->position,
            'Agency_name' => $request->Agency_name
        ]);
        return redirect()->route('resume');
    }

    public function status($id)
    {
        $checkData = Resume::where('id', $id)->first();
        if ($checkData->status == 1) {
            $checkData->update(['status' => 0]);
        } else {
            $checkData->update(['status' => 1]);
        }
        return redirect()->route('resume');
    }
}
