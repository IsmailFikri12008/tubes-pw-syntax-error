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
        width: 280px;
        left: 350px;
        top: 50%;
    }
    .judul h1:after {
        content: " ";
        position: absolute;
        border-bottom: 1px solid black;
        width: 280px;
        right: 350px;
        top: 50%;
    }
</style>

<div class="judul">
    <h1 class="text-center">{{ $judul }}</h1>
</div>
<br>

@if ($animes->count())
<div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-8">
        <h1 class="mb-3">{{ $animes->judul }}</h1>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card">
                        @if ($animes->image)
                        <div style="overflow: hidden;">
                            <img src="{{ asset('storage/' . $animes->image) }}" alt="{{ $animes->category->name }}" class="img-fluid mt-3">
                        </div>
                        @endif
                        <div class="card-body">
                            <h2>Informasi</h2>
                            <hr>
                            <p class="card-text">Tipe : {!! $animes->tipe !!}</p>
                            <p class="card-text">Episode : {!! $animes->episode !!}</p>
                            <p class="card-text">Status : {!! $animes->status !!}</p>
                            <p class="card-text">Rilis : {!! $animes->rilis !!}</p>
                            <p class="card-text">Primer : {!! $animes->primer !!}</p>
                            <p class="card-text">Tayang : {!! $animes->tayang !!}</p>
                            <p class="card-text">Produser : {!! $animes->produser !!}</p>
                            <p class="card-text">Lisensi : {!! $animes->lisensi !!}</p>
                            <p class="card-text">Studio : {!! $animes->studio !!}</p>
                            <p class="card-text">Sumber : {!! $animes->sumber !!}</p>
                            <p class="card-text">Demografis : {!! $animes->demografis !!}</p>
                            <p class="card-text">Durasi : {!! $animes->durasi !!}</p>
                            <p class="card-text">Rating : {!! $animes->rating !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-lg-6 justify">
                <h2>Sinopsis</h2>
                <article class="my-3 fs-5" style="text-align: justify">
                    {!! $animes->sinopsis !!}
                </article>
            </div>
        </div>
  
      </div>
    </div>
  </div>
  @endif

@endsection
