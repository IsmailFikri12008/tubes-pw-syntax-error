<?php

use App\Models\Anime;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnimeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;



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

// Route::get('/', function () {
//     return view ('home', [
//         "title" => "Home",
//         "active" => 'home',
//     ]);
// });

Route::resource('/', HomeController::class);

// Route::get('/fall', function () {
//     return view('fall', [
//         "title" => "Fall",
//         "judul" => 'Anime Fall 2022',
//         "active" => 'fall'
//     ]);
// });

Route::get('/anime-fall', [AnimeController::class, 'fall']);

// Route::get('/summer', function () {
//     return view('summer', [
//         "title" => "Summer",
//         "judul" => 'Anime Summer 2022',
//         "active" => 'summer'
//     ]);
// });

Route::get('/anime-summer', [AnimeController::class, 'summer']);

// Route::get('/spring', function () {
//     return view('spring', [
//         "title" => "Spring",
//         "judul" => 'Anime Spring 2022',
//         "active" => 'spring'
//     ]);
// });

Route::get('/anime-spring', [AnimeController::class, 'spring']);

// Route::get('/winter', function () {
//     return view('winter', [
//         "title" => "Winter",
//         "judul" => 'Anime Winter 2022',
//         "active" => 'winter'
//     ]);
// });

Route::get('/anime-winter', [AnimeController::class, 'winter']);

// Route::get('/rekomendasi', function () {
//     return view('rekomendasi', [
//         "title" => 'Rekomendasi',
//         "judul" => 'Rekomendasi Anime',
//         "active" => 'rekomendasi'
//     ]);
// });

Route::get('/rekomendasi', [AnimeController::class, 'rekomendasi'])->middleware('auth');

// Route::get('/rangking', function () {
//     return view('rangking', [
//         "title" => "Rangking",
//         "active" => 'rangking'
//     ]);
// });

Route::get('/rangking', [AnimeController::class, 'rangking'])->middleware('auth');

Route::get('/action', [AnimeController::class, 'action']);
Route::get('/adventure', [AnimeController::class, 'adventure']);
Route::get('/comedy', [AnimeController::class, 'comedy']);
Route::get('/drama', [AnimeController::class, 'drama']);
Route::get('/fantasy', [AnimeController::class, 'fantasy']);
Route::get('/horror', [AnimeController::class, 'horror']);
Route::get('/romance', [AnimeController::class, 'romance']);
Route::get('/thriller', [AnimeController::class, 'thriller']);
Route::get('/slice-of-life', [AnimeController::class, 'slice']);
Route::get('/sport', [AnimeController::class, 'sport']);

Route::get('/bookmark', [BookmarkController::class, 'index'])->middleware('auth');
Route::post('/bookmark/{animes:slug}', [BookmarkController::class, 'liker'])->middleware('auth');
Route::post('/bookmark/{animes:slug}/hapus', [BookmarkController::class, 'disliker'])->middleware('auth');

// Route::get('/detail', function () {
//     return view('detail', [
//         "title" => "Detail",
//         "active" => 'detail',
//         "animes" => Anime::all()
//     ]);
// });

Route::get('/about', function () {
    return view('about', [
        "judul" => "About",
        "active" => 'about'
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/', [AnimeController::class, 'index']);
Route::get('/home', [AnimeController::class, 'index']);
Route::get('/detail/{slug}', [AnimeController::class, 'detail'])->middleware('auth');

// Halaman single post
Route::get('/home/{animes:slug}', [AnimeController::class, 'show'])->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'animes' => Anime::all(),
        'total' => Anime::where('user_id', auth()->user()->id)->count('category_id'),
        'user' => User::all()->count('id'),
        'admin' => User::where('is_admin', 1)->count('id')
    ]);
})->middleware('auth');
Route::get('/dashboard/animes/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/animes', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');
Route::resource('/dashboard/genres', GenreController::class)->except('show')->middleware('admin');
Route::get('/dashboard/genres/checkSlug', [GenrePostController::class, 'checkSlug'])->middleware('auth');
