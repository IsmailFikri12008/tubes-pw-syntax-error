@extends('layouts.main')

@section('container')
<style>
    .judul {
        text-align: center;
        margin-top: 80px;
    }
    .judul h1 {
        position: relative;
        display: inline-block;
    }
    .judul h1:before {
        content: " ";
        position: absolute;
        border-bottom: 1px solid black;
        width: 400px;
        left: 120px;
        top: 50%;
    }
    .judul h1:after {
        content: " ";
        position: absolute;
        border-bottom: 1px solid black;
        width: 400px;
        right: 120px;
        top: 50%;
    }
</style>
<div class="judul">
    <h1 class="text-center">{{ $judul }}</h1>
</div>
<br>
<br>

@if ($animes->count())
<div class="container">
    <div class="row">
        @foreach ($animes as $anime)
            <div class="col-md-4 bb-3">
                <div class="card object-fit">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/{{ $anime->category->slug }}" class="text-white text-decoration-none">{{ $anime->category->name }}</a></div>
                    @if ($anime->image)
                        <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->category->name }}" class="img-fluid">
                    @else
                        <img src="https://kitsu.io/api/edge/anime?filter[slug]={{ $anime->category->name }}" class="card-img-top" alt="{{ $anime->category->name }}">
                    @endif
                    <div class="card-body">
                        <h4 class="card-title  text-center">{{ $anime->judul }}</h4>
                        <p class=" text-center"><small class="text-muted">By. <a href="/home?author={{ $anime->author->name }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                        <h5 class="card-text text-center"><a href="/{{ $anime->genre->slug }}" class="text-decoration-none">{{ $anime->genre->name }}</a></h5>
                        <p class="card-text justify">{{ $anime->excerpt }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="/home/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                            @if (DB::table('likes')->where('anime_id', '=', $anime->id)->where('user_id', '=', Auth::id())->first())
                                <div class="bookmarked">
                                    <span class="card-link text-decoration-none border-0 bg-white">
                                        <i class="bi bi-bookmarks"></i>
                                        Simpan
                                    </span>
                                </div>
                            @else
                                <form action="/bookmark/{{ $anime->slug }}" method="POST">
                                    @csrf
                                    <button
                                        class="card-link text-decoration-none border-0 bg-white text-primary">
                                        <i class="bi bi-bookmarks"></i>
                                        Tersimpan
                                    </button>
                                </form>
                            @endif
                        </div>
                </div>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    <div class="d-flex justify-content-end">
        {{ $animes->links() }}
    </div>
</div>

@else
<p class="text-center fs-4">No Post Found.</p>
@endif

@endsection
