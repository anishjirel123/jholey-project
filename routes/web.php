<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[HomeController::class,'getHome'])->name('getHome');

Route::get('about',[HomeController::class,'getAbout'])->name('getAbout');

// Route::get('service',[HomeController::class,'getSerivce'])->name('getService');

// Route::get('gallery',[HomeController::class,'getGallery'])->name('getGallery');

// Route::get('contact',[HomeController::class,'getContact'])->name('getContact');
