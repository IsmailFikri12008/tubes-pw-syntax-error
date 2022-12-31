<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Anime;
use App\Models\Genre;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cviebrock\EloquentSluggable\Tests\Models\Post;

class AnimeController extends Controller
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

        return view('home', [
            "judul" => "Home" . $judul,
            "active" => 'home',
            // "posts" => Post::all()
            "animes" => Anime::latest()->filter(request(['search', 'category', 'genre', 'author'])),
            "anifall" => Anime::latest()->where('category_id', 1)->filter(request(['search', 'category', 'genre', 'author']))->paginate(3)->withQueryString(),
            "anispri" => Anime::latest()->where('category_id', 2)->filter(request(['search', 'category', 'genre', 'author']))->paginate(3)->withQueryString(),
            "anisum" => Anime::latest()->where('category_id', 3)->filter(request(['search', 'category', 'genre', 'author']))->paginate(3)->withQueryString(),
            "aniwin" => Anime::latest()->where('category_id', 4)->filter(request(['search', 'category', 'genre', 'author']))->paginate(3)->withQueryString()
        ]);
    }

    public function detail($slug)
    {
        $animes = Anime::select('*')->where('slug', $slug)->get();
        return view('detail', [
            "judul" => "Detail Anime",
            "active" => 'detail',
            "animes" => $animes
        ]);
    }

    public function fall(Anime $anime)
    {
        return view('fall', [
            "judul" => "Anime Fall",
            "active" => 'fall',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('category_id', 1)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function summer(Anime $anime)
    {
        return view('summer', [
            "judul" => "Anime Summer",
            "active" => 'summer',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('category_id', 3)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function spring(Anime $anime)
    {
        return view('spring', [
            "judul" => "Anime Spring",
            "active" => 'spring',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('category_id', 2)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function winter(Anime $anime)
    {
        return view('winter', [
            "judul" => "Anime Winter",
            "active" => 'winter',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('category_id', 4)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function rekomendasi(Anime $anime)
    {
        return view('rekomendasi', [
            "judul" => "Rekomendasi Anime",
            "active" => 'rekomendasi',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('is_rekomendasi', 1)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function rangking(Anime $anime)
    {
        return view('rangking', [
            "judul" => "Rangking Anime",
            "active" => 'rangking',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('is_rekomendasi', 1)->filter(request(['search', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function action(Anime $anime)
    {
        return view('action', [
            "judul" => "Action",
            "active" => 'action',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('genre_id', 1)->paginate(6)->withQueryString()
        ]);
    }
    public function adventure(Anime $anime)
    {
        return view('adventure', [
            "judul" => "Adventure",
            "active" => 'adventure',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('genre_id', 2)->paginate(6)->withQueryString()
        ]);
    }
    public function comedy(Anime $anime)
    {
        return view('comedy', [
            "judul" => "Comedy",
            "active" => 'comedy',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('genre_id', 3)->paginate(6)->withQueryString()
        ]);
    }
    public function drama(Anime $anime)
    {
        return view('drama', [
            "judul" => "Drama",
            "active" => 'drama',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('genre_id', 4)->paginate(6)->withQueryString()
        ]);
    }
    public function fantasy(Anime $anime)
    {
        return view('fantasy', [
            "judul" => "Fantasy",
            "active" => 'fantasy',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('genre_id', 5)->paginate(6)->withQueryString()
        ]);
    }
    public function horror(Anime $anime)
    {
        return view('horror', [
            "judul" => "horror",
            "active" => 'horror',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('genre_id', 6)->paginate(6)->withQueryString()
        ]);
    }
    public function romance(Anime $anime)
    {
        return view('romance', [
            "judul" => "Romance",
            "active" => 'romance',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('genre_id', 7)->paginate(6)->withQueryString()
        ]);
    }
    public function thriller(Anime $anime)
    {
        return view('thriller', [
            "judul" => "Thriller",
            "active" => 'thriller',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('genre_id', 8)->paginate(6)->withQueryString()
        ]);
    }
    public function slice(Anime $anime)
    {
        return view('slice', [
            "judul" => "Slice of Life",
            "active" => 'slice',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('genre_id', 9)->paginate(6)->withQueryString()
        ]);
    }
    public function sport(Anime $anime)
    {
        return view('sport', [
            "judul" => "Sport",
            "active" => 'sport',
            // "posts" => Post::all()
            "animes" => Anime::latest()->where('genre_id', 10)->paginate(6)->withQueryString()
        ]);
    }
}
