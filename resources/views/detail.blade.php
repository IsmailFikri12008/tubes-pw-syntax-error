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
    /* .judul h1:before {
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
    } */
</style>

@foreach($animes as $anim)
<div class="judul">
    <h1 class="text-center">{{ $anim->judul }}</h1>
</div>
<br>

<div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card">
                        {{-- @if ($anim->anime) --}}
                        <div style="overflow: hidden;">
                            <img src="{{ asset('storage/' . $anim->image) }}" alt="{{ $anim->image }}" class="img-fluid mt-3" style="height: 600px;">
                        </div>
                        {{-- @else --}}
                            {{-- <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->image }}" class="img-fluid mt-3"> --}}
                        {{-- @endif --}}
                        <div class="card-body">
                            <h2>Informasi</h2>
                            <hr>
                            <p class="card-text">Tipe : {{ $anim->tipe }}</p>
                            <p class="card-text">Episode : {!! $anim->episode !!}</p>
                            <p class="card-text">Status : {!! $anim->status !!}</p>
                            <p class="card-text">Rilis : {!! $anim->rilis !!}</p>
                            <p class="card-text">Primer : {!! $anim->primer !!}</p>
                            <p class="card-text">Tayang : {!! $anim->tayang !!}</p>
                            <p class="card-text">Produser : {!! $anim->produser !!}</p>
                            <p class="card-text">Lisensi : {!! $anim->lisensi !!}</p>
                            <p class="card-text">Studio : {!! $anim->studio !!}</p>
                            <p class="card-text">Sumber : {!! $anim->sumber !!}</p>
                            <p class="card-text">Demografis : {!! $anim->demografis !!}</p>
                            <p class="card-text">Durasi : {!! $anim->durasi !!}</p>
                            <p class="card-text">Rating : {!! $anim->rating !!}</p>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        
            <div class="col-lg-6 justify">
                <h2>Sinopsis</h2>
                <article class="my-3 fs-5" style="text-align: justify">
                    {!! $anim->sinopsis !!}
                </article>
            </div>
        </div>
        <a href="/" class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary">Kembali</button>
         </a>
  
      </div>
    </div>
  </div>
  @endforeach

@endsection
