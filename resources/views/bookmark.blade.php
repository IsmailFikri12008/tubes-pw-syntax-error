@extends('layouts.main')

@section('container')

<div class="row justify-content-center mb-3">
    @if ($animes->count())
    <div class="container">
        <div class="row">
            @foreach ($animes as $anime)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                        <a href="/?category={{ $anime->category->slug }}" class="text-white text-decoration-none">
                            {{ $anime->category->name }}
                        </a>
                    </div>
                    @if ($anime->image)
                    <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->category->name }}" class="img-fluid gambarCard">
                    @else
                    <img src="https://source.unsplash.com/500x400?{{ $anime->category->name }}" class="card-img-top" alt="{{ $anime->category->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $anime->judul }}</h5>
                        <p>
                            <small class="text-muted">
                                By.
                                <a href="/?user={{ $anime->user->name }}" class="text-decoration-none">
                                    {{ $anime->user->name }}
                                </a>
                                {{ $anime->created_at->diffForHumans() }}
                            </small>
                        </p>
                        <div class="d-flex justify-content-between">
                            <a href="/home/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                            <form action="/bookmark{{ $anime->slug }}/hapus" method="post">
                                @csrf
                                <button class="card-link text-decoration-none border-0 bg-white text-primary">
                                    <i class="bi bi-bookmark-plus"></i>
                                    Hapus Bookmark
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <p class="text-center fs-4">No post found.</p>
    @endif

    {{-- <div class="d-flex justify-content-end">
            {{ $posts->links() }}
</div> --}}

@endsection
