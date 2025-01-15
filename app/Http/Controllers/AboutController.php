<?php

namespace App\Http\Controllers;

use App\Models\About;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function index () {
        $rows = About::get();
        return view('about.index', ['rows'=>$rows]);
    }
   public function create () {
       return view('about.create');
   }

   public function store(Request $request) {
    // 
       About::create([
           'title' => $request->title,
           'focus_title' => $request->focus_title,
           'description' => $request->about
       ]);
       return redirect()->route('about');
       
   }

   public function destroy($id) {
    $checkData = About::where('id', $id)->first();
    if($checkData) {
        $checkData->delete();
    }
    return redirect()->route('about');
}


public function edit($id) {
    $row = About::where('id', $id)->first();
    return redirect()->route('about', ['row'=>$row]);

}    




}



