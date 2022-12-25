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
            // "animes" => Anime::latest()->filter(request(['search', 'category', 'author'])),
            "anifall" => Anime::latest()->where('category_id' , 1)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            "anispri" => Anime::latest()->where('category_id' , 2)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            "anisum" => Anime::latest()->where('category_id' , 3)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString(),
            "aniwin" => Anime::latest()->where('category_id' , 4)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }
}
