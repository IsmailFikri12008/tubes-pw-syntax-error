<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\Like;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function index()
    {
        return view('bookmark', [
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
        // $user = auth()->user();
        $user = User::all();
        $user->votedAnime()->attach($anime->id);
        return redirect('/');
    }

    public function disliker(Anime $anime)
    {
        $user = User::all();
        $user->votedAnime()->detach($anime->id);
        return redirect('/bookmark');
    }
}
