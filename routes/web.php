<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShipmantController;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\SpecializationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;
use App\Models\About;
use App\Models\Home;
use App\Models\Resume;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('frontend.index', [
        'abouts' => About::all(),
        'homes' => Home::all(),
        'resumes' => Resume::all(),
    ]);
});


   

   

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/shipment', [ShipmantController::class, 'index'])->name('shipping');

    Route::get('/about', [Aboutcontroller::class, 'index'])->name('about');
    Route::get('/about/create', [Aboutcontroller::class, 'create'])->name('about.create');
    Route::post('/about/store', [Aboutcontroller::class, 'store'])->name('about.store');
    Route::get('/about/delete/{id}', [Aboutcontroller::class, 'destroy'])->name('about.delete');
    Route::get('/about/edit/{id}', [Aboutcontroller::class, 'edit'])->name('about.edit');
    Route::post('/about/update/{id}', [Aboutcontroller::class, 'update'])->name('about.update');

    Route::get('/home',[HomeController::class,'index'])->name('home');
    Route::get('/home/create',[HomeController::class,'create'])->name('home.create');
    Route::post('/home/store',[HomeController::class,'store'])->name('home.store');
    Route::get('/home/delete/{id}',[HomeController::class,'destroy'])->name('home.delete');
    Route::get('/home/edit/{id}',[HomeController::class,'edit'])->name('home.edit');
    Route::post('/home/update/{id}',[HomeController::class,'update'])->name('home.update');

    Route::get('/specializations', [SpecializationsController::class, 'index'])->name('specializations');
    Route::get('/specializations/create', [SpecializationsController::class, 'create'])->name('specializations.create');
    Route::post('/specializations/store', [SpecializationsController::class, 'store'])->name('specializations.store');
    Route::get('/specializations/delete/{id}', [SpecializationsController::class, 'destroy'])->name('specializations.delete');
    Route::get('/specializations/edit/{id}', [SpecializationsController::class, 'edit'])->name('specializations.edit');
    Route::post('/specializations/update/{id}', [SpecializationsController::class, 'update'])->name('specializations.update');


    Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
    Route::get('/resume/create', [ResumeController::class, 'create'])->name('resume.create');
    Route::post('/resume/store', [ResumeController::class, 'store'])->name('resume.store');
    Route::get('/resume/delete/{id}', [ResumeController::class, 'destroy'])->name('resume.delete');
    Route::get('/resume/edit/{id}', [ResumeController::class, 'edit'])->name('resume.edit');
    Route::post('/resume/update/{id}', [ResumeController::class, 'update'])->name('resume.update');


});

require __DIR__ . '/auth.php';
