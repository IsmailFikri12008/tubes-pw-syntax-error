@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center" style="margin-top: 80px;">{{ $judul }}</h1>
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
