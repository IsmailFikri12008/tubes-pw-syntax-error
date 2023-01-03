<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Anime;
use App\Models\Genre;


use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Cviebrock\EloquentSluggable\Tests\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $judul = '';

        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $judul = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $judul = ' by ' . $author->name;
        }

        if (request('genre')) {
            $genre = Genre::firstWhere('slug', request('genre'));
            $judul = ' in ' . $genre->name;
        }

        return view ('home', [
            "judul" => "Home" . $judul,
            "active" => 'home',
            // "posts" => Post::all()
            "animes" => Anime::all()->filter(request(['search', 'category', 'author'])),
            
        ]);
    }
}
