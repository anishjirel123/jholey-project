<?php
use App\Http\Controllers\SiteController;
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
Route::get('/',[SiteController::class,'getHome'])->name('getHome');

Route::get('abouts', [SiteController::class ,'getAbouts'])->name('getAbouts');

Route::get('service', [SiteController::class ,'getService'])->name('getService');

Route::get('contact', [SiteController::class ,'getContact'])->name('getContact');

Route::get('readmore',[SiteController::class,'getReadmore'])->name('getReadmore');

Route::get('more',[SiteController::class,'getMore'])->name('getMore');