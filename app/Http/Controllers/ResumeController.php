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
        $resume = Resume::findOrFail($id);
        $resume->update([
            'title' => $request->title,
            'working_years' => $request->working_years,
            'position' => $request->position,
            'Agency_name' => $request->Agency_name
        ]);
        return redirect()->route('resume');
    }

    
}
