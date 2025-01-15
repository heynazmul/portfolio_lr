<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShipmantController extends Controller
{
    public function index () {
        $students = ['Nazmul' , 'Al-amin' , 'Meraz'];
        return view('shipment.index', ['studentName'=>$students]);
    }
}
