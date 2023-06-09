<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GalleryController;

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/resume', function () {
    return view('resume');
})->name('resume');

Route::get('/project', function () {
    return view('project');
})->name('project');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries');

Route::get('/galleries/{gallery:slug}', [GalleryController::class, 'show'])->name('gallery');

Auth::routes();


