<?php
namespace App\Http\Controllers;

use App\Http\Controllers;

use App\Models\Specialization;
use Illuminate\Http\Request;

class SpecializationsController extends Controller
{
    public function index () {
        $rows = Specialization::get();
        return view('specializations.index', ['rows' => $rows]);
    }


    public function create () {
        return view('specializations.create');
    }


    public function store(Request $request) {   
        
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'url' => 'required|url',
            'url_title' => 'required|max:255'
        ]);

        //$icon = $request->file('icon')->store('specializations');

        Specialization::create([
            'title' => $request->title,
            'description' => $request->description,
            'icon' => null,
            'icon' => $request->icon,
            'url' => $request->url,
            'url_title' => $request->url_title
        ]);
        return redirect()->route('specializations.index');
    }
    public function destroy($id) {
        $checkData = Specialization::where('id', $id)->first();
        $checkData->delete();
        return redirect()->route('specializations.index');
    }
}


