<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\ShipmantController;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\SpecializationsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Models\About;
use App\Models\Home;
use App\Models\Resume;
use App\Models\Service;
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


Route::get('/', [FrontEndController::class, 'home']);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/shipment', [ShipmantController::class, 'index'])->name('shipping');

    //about

    Route::get('/about', [Aboutcontroller::class, 'index'])->name('about');
    Route::get('/about/create', [Aboutcontroller::class, 'create'])->name('about.create');
    Route::post('/about/store', [Aboutcontroller::class, 'store'])->name('about.store');
    Route::get('/about/delete/{id}', [Aboutcontroller::class, 'destroy'])->name('about.delete');
    Route::get('/about/edit/{id}', [Aboutcontroller::class, 'edit'])->name('about.edit');
    Route::post('/about/update/{id}', [Aboutcontroller::class, 'update'])->name('about.update');
    Route::get('/about/status/{id}', [Aboutcontroller::class, 'status'])->name('about.status');


    //home
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/home/create', [HomeController::class, 'create'])->name('home.create');
    Route::post('/home/store', [HomeController::class, 'store'])->name('home.store');
    Route::get('/home/delete/{id}', [HomeController::class, 'destroy'])->name('home.delete');
    Route::get('/home/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
    Route::put('/home/update/{id}', [HomeController::class, 'update'])->name('home.update');
    Route::get('/home/status/{id}', [HomeController::class, 'status'])->name('home.status');


    //resume
    Route::get('/resume', [ResumeController::class, 'index'])->name('resume');
    Route::get('/resume/create', [ResumeController::class, 'create'])->name('resume.create');
    Route::post('/resume/store', [ResumeController::class, 'store'])->name('resume.store');
    Route::get('/resume/delete/{id}', [ResumeController::class, 'destroy'])->name('resume.delete');
    Route::get('/resume/edit/{id}', [ResumeController::class, 'edit'])->name('resume.edit');
    Route::post('/resume/update/{id}', [ResumeController::class, 'update'])->name('resume.update');
    Route::get('/resume/status/{id}', [ResumeController::class, 'status'])->name('resume.status');

    //service
    Route::get('/service', [ServiceController::class, 'index'])->name('service');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/service/delete/{id}', [ServiceController::class, 'destroy'])->name('service.delete');
    Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
    Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
    Route::get('/service/status/{id}', [ServiceController::class, 'status'])->name('service.status');
});

require __DIR__ . '/auth.php';
