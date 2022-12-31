<?php

namespace App\Http\Controllers;
use App\Models\Anime;
use App\Models\User;
use App\Models\Category;

use Illuminate\Http\Request;

class HomeController extends Controller
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
            "animes" => Anime::all()->filter(request(['search', 'category', 'author'])),
            
        ]);
    }
}
