<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnimeController extends Controller
{
    public function index() {
        $judul = '';

        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $judul = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $judul = ' by ' . $author->name;
        }

        return view ('home', [
            "judul" => "Home" . $judul,
            "active" => 'home',
            // "posts" => Post::all()
            "animes" => Anime::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Anime $anime) {
        return view('anime', [
            "judul" => "Single Anime Post",
            "active" => 'detail',
            "anime" => $anime
        ]);
    }

    public function fall(Anime $anime) {
        return view ('fall', [
            "judul" => "Anime Fall",
            "active" => 'fall',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('category_id' , 1)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function summer(Anime $anime) {
        return view ('summer', [
            "judul" => "Anime Summer",
            "active" => 'summer',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('category_id' , 3)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function spring(Anime $anime) {
        return view ('spring', [
            "judul" => "Anime Spring",
            "active" => 'spring',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('category_id' , 2)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function winter(Anime $anime) {
        return view ('winter', [
            "judul" => "Anime Winter",
            "active" => 'winter',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('category_id' , 4)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function rekomendasi(Anime $anime) {
        return view ('rekomendasi', [
            "judul" => "Rekomendasi Anime",
            "active" => 'rekomendasi',
            // "posts" => Post::all()
            "animes" => Anime::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function rangking(Anime $anime) {
        return view ('rangking', [
            "judul" => "Rangking Anime",
            "active" => 'rangking',
            // "posts" => Post::all()
            "animes" => Anime::latest()->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }
}
