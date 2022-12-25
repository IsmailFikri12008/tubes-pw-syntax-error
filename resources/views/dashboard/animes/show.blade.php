@extends('dashboard.layouts.main')

@section('container')

<div class="row my-3">
    <div class="col-lg-8">
        <h1 class="mb-3">{{$anime->judul}}</h1>

        <a href="/dashboard/animes" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my Anime Post</a>
        <a href="/dashboard/animes/{{ $anime->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
        <form action="/dashboard/animes/{{ $anime->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle"></span> Delete</button>
        </form>
    </div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="card">
            <div class="card">
                @if ($anime->image)
                <div style="overflow: hidden;">
                    <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->category->name }}" class="img-fluid mt-3">
                </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $anime->category->name }}" alt="{{ $anime->category->name }}" class="img-fluid mt-3">
                @endif
                <div class="card-body">
                    <h2>Informasi</h2>
                    <hr>
                    <p class="card-text">Tipe : {!! $anime->tipe !!}</p>
                    <p class="card-text">Episode : {!! $anime->episode !!}</p>
                    <p class="card-text">Status : {!! $anime->status !!}</p>
                    <p class="card-text">Rilis : {!! $anime->rilis !!}</p>
                    <p class="card-text">Primer : {!! $anime->primer !!}</p>
                    <p class="card-text">Tayang : {!! $anime->tayang !!}</p>
                    <p class="card-text">Produser : {!! $anime->produser !!}</p>
                    <p class="card-text">Lisensi : {!! $anime->lisensi !!}</p>
                    <p class="card-text">Studio : {!! $anime->studio !!}</p>
                    <p class="card-text">Sumber : {!! $anime->sumber !!}</p>
                    <p class="card-text">Genre : {!! $anime->genre !!}</p>
                    <p class="card-text">Demografis : {!! $anime->demografis !!}</p>
                    <p class="card-text">Durasi : {!! $anime->durasi !!}</p>
                    <p class="card-text">Rating : {!! $anime->rating !!}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6 justify">
        <h2>Sinopsis</h2>
        <article class="my-3 fs-5" style="text-align: justify">
            {!! $anime->sinopsis !!}
        </article>
    </div>
</div>
<br>
<br>
@endsection
