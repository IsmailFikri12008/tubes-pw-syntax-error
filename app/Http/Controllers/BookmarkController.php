<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Routing\Controller;

class BookmarkController extends Controller
{
    public function index()
    {
        return view('/bookmark', [
            'judul' => 'Bookmark',
            'active' => 'home',
            "animes" => Anime::join('likes', 'animes.id', '=', 'likes.anime_id')
                ->join('users', 'likes.user_id', '=', 'users.id')
                ->where('users.id', '=', auth()->user()->id)
                ->get()
        ]);
    }

    public function liker(Anime $anime)
    {
        $user = auth()->user();
        $user->votedAnimes()->attach($anime->id);
        return redirect('/');
    }

    public function disliker(Anime $anime)
    {
        $user = auth()->user();
        $user->votedAnimes()->detach($anime->id);
        return redirect('/bookmark');
    }
}
