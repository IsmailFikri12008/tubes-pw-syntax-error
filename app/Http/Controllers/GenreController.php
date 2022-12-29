<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Genre;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Cviebrock\EloquentSluggable\Services\SlugService;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(auth()->guest() || auth()->user()->username !== 'ismailfikri') {
        //     abort(403);
        // }

        // $this->authorize('admin');

        return view('dashboard.genres.index', [
            'genres' => Genre::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.genres.create', [
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
            'name' => 'required|max:255',
            'slug' => 'required|unique:genres',
        ]);

        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('anime-images');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Genre::create($validatedData);

        return redirect('/dashboard/genres')->with('success', 'New Genre Anime has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function show(Genre $genre)
    {
        return view('dashboard.genres.show', [
            'genres' => $genre
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function edit(Genre $genre)
    {
        return view('dashboard.genres.edit', [
            'genre' => $genre
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Genre $genre)
    {
        $rules = [
            'name' => 'required|max:255',
            'slug' => 'required|unique:genres',
        ];

        if($request->slug != $genre->slug) {
            $rules['slug'] = 'required|unique:genres';
        }

        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = auth()->user()->id;

        Genre::where('id', $genre->id)
            ->update($validatedData);

        return redirect('/dashboard/genres')->with('success', 'Genre has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Genre $genre)
    {
        Genre::destroy($genre->id);

        return redirect('/dashboard/genres')->with('success', 'Genre has been deleted!');

        // return Anime::where('id', $anime->id)->get();
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Genre::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
    
}
