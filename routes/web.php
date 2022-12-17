<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;



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
    return view ('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/fall', function () {
    return view('fall', [
        "title" => "Fall",
        "judul" => 'Anime Fall 2022',
        "active" => 'fall'
    ]);
});

Route::get('/summer', function () {
    return view('summer', [
        "title" => "Summer",
        "judul" => 'Anime Summer 2022',
        "active" => 'summer'
    ]);
});

Route::get('/spring', function () {
    return view('spring', [
        "title" => "Spring",
        "judul" => 'Anime Spring 2022',
        "active" => 'spring'
    ]);
});

Route::get('/winter', function () {
    return view('winter', [
        "title" => "Winter",
        "judul" => 'Anime Winter 2022',
        "active" => 'winter'
    ]);
});

Route::get('/rekomendasi', function () {
    return view('rekomendasi', [
        "title" => 'Rekomendasi',
        "judul" => 'Rekomendasi Anime',
        "active" => 'rekomendasi'
    ]);
});

Route::get('/rangking', function () {
    return view('rangking', [
        "title" => "Rangking",
        "active" => 'rangking'
    ]);
});

Route::get('/detail', function () {
    return view('detail', [
        "title" => "Detail",
        "active" => 'detail'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
//Route::post('/logout', [LoginController::class, 'logout']);