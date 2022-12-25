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
        left: 390px;
        top: 50%;
    }
    .judul h1:after {
        content: " ";
        position: absolute;
        border-bottom: 1px solid black;
        width: 400px;
        right: 390px;
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
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/animes?category={{ $anime->category->slug }}" class="text-white text-decoration-none">{{ $anime->category->name }}</a></div>
                            @if ($anime->image)
                                <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->category->name }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $anime->category->name }}" class="card-img-top" alt="{{ $anime->category->name }}">
                            @endif
                            <div class="card-body">
                            <h5 class="card-title">{{ $anime->title }}</h5>
                            <p><small class="text-muted">By. <a href="/animes?author={{ $anime->author->username }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $anime->excerpt }}</p>
                            <a href="/animes/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @else
            <p class="text-center fs-4">No Post Found.</p>
            @endif
            <br>
            <div class="d-flex justify-content-end">
                {{ $animes->links() }}
            </div>
        </div>
@endsection
