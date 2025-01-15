<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShipmantController;
use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\SpecializationsController;
use Illuminate\Support\Facades\Route;
use App\Models\About;

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

    Route::get('specializations',[SpecializationsController::class,'index'])->name('specializations.index');
    Route::get('specializations/create', [SpecializationsController::class, 'create'])->name('specializations.create');
    Route::post('specializations/store', [SpecializationsController::class, 'store'])->name('specializations.store');
    Route::get('specializations/delete/{id}', [SpecializationsController::class, 'destroy'])->name('specializations.delete');

});

require __DIR__ . '/auth.php';
