<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Genre;
use App\Models\Category;
use illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;


class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.animes.index', [
            'animes' => Anime::where('user_id', auth()->user()->id)->get()
        ]);
    }

    // public function list()
    // {
    //     return view('dashboard.anime.index', [
    //         'anime' => Anime::where('user_id', auth()->user()->id)->get()
    //     ]);
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.animes.create', [
            'categories' => Category::all(),
            'genres' => Genre::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|max:255',
            'slug' => 'required|unique:animes',
            'category_id' => 'required',
            'genre_id' => 'required',
            'image' => 'image|file|max:1024',
            'tipe' => 'required',
            'episode' => 'required',
            'status' => 'required',
            'rilis' => 'required',
            'primer' => 'required',
            'tayang' => 'required',
            'produser' => 'required',
            'lisensi' => 'required',
            'studio' => 'required',
            'sumber' => 'required',
            // 'genre' => 'required',
            'demografis' => 'required',
            'durasi' => 'required',
            'rating' => 'required',
            'sinopsis' => 'required'
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('anime-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->sinopsis), 200);

        Anime::create($validatedData);

        return redirect('/dashboard/animes')->with('success', 'New Anime has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Anime $anime)
    {
        return view('dashboard.animes.show', [
            'anime' => $anime
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Anime $anime)
    {
        return view('dashboard.animes.edit', [
            'anime' => $anime,
            'categories' => Category::all(),
            'genres' => Genre::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anime $anime)
    {
        $rules = [
            'judul' => 'required|max:255',
            'slug' => 'required|unique:animes',
            'category_id' => 'required',
            'genre_id' => 'required',
            'image' => 'image|file|max:1024',
            'tipe' => 'required',
            'episode' => 'required',
            'status' => 'required',
            'rilis' => 'required',
            'primer' => 'required',
            'tayang' => 'required',
            'produser' => 'required',
            'lisensi' => 'required',
            'studio' => 'required',
            'sumber' => 'required',
            // 'genre' => 'required',
            'demografis' => 'required',
            'durasi' => 'required',
            'rating' => 'required',
            'sinopsis' => 'required'
        ];

        if($request->slug != $anime->slug) {
            $rules['slug'] = 'required|unique:animes';
        }

        $validatedData = $request->validate($rules);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('anime-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Anime::where('id', $anime->id)
            ->update($validatedData);

        return redirect('/dashboard/animes')->with('success', 'Post has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anime $anime)
    {
        if($anime->image) {
            Storage::delete($anime->image);
        }

        Anime::destroy($anime->id);

        return redirect('/dashboard/animes')->with('success', 'Anime Post has been deleted!');

        // return Anime::where('id', $anime->id)->get();
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Anime::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
