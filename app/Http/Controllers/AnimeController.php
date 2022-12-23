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
        $title = '';

        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view ('home', [
            "title" => "Home" . $title,
            "active" => 'home',
            // "posts" => Post::all()
            "animes" => Anime::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Anime $anime) {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "anime" => $anime
        ]);
    }
}
