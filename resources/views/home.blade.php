<?php

function get_CURL($url)
{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

// $namaAnime = ['poco x3', 'rog 5', 'samsung galaxy 10', 'realme 9'];
// $allAnime = [];
// foreach ($namaAnime as $anim) {
//   $myAnime = [];
//   $hasil = get_CURL('https://phone-specs-api.azharimm.dev/search?query=' . $anim);
//   $myAnime['judul'] = $hasil['data']['phones'][0]['phone_name'];
//   $myAnime['foto'] = $hasil['data']['phones'][0]['image'];

//   $allAnime[] = $myAnime;
// }

$namaAnime = ['one-piece', 'tokyo-ghoul', 'black-clover', 'naruto'];
$allAnime = [];
foreach ($namaAnime as $anim) {
    $myAnime = [];
    $hasil = get_CURL('https://kitsu.io/api/edge/anime?filter[slug]=' . $anim);
    // var_dump(strtoupper($hasil['data'][0]['attributes']['slug']));
    $myAnime['judul'] = strtoupper($hasil['data'][0]['attributes']['slug']);
    $myAnime['foto'] = $hasil['data'][0]['attributes']['posterImage']['small'];

    $allAnime[] = $myAnime;
}

// $namaAnime = 'naruto';
// $hasil = get_CURL('https://kitsu.io/api/edge/anime?filter[slug]=' . $namaAnime);
// $judulAnime = $hasil['data'][0]['attributes']['slug'];
// $judulAnime = strtoupper($judulAnime);
// $fotoAnime = $hasil['data'][0]['attributes']['posterImage']['small'];
// $sinopsisAnime = $hasil['data'][0]['attributes']['synopsis'];

// // Instagram API
// $clientId = 'f0b022fbe68c4ae79dd51169af18feb4';
// $accessToken = '2934880.f0b022f.ed7efe3174cc4a41a5fc7bf68eabd909';

// $result = get_CURL('https://api.instagram.com/v1/users/self?access_token=2934880.f0b022f.ed7efe3174cc4a41a5fc7bf68eabd909');
// $usernameIG = $result['data']['username'];
// $profilePictureIG = $result['data']['profile_picture'];
// $followersIG = $result['data']['counts']['followed_by'];

// // latest IG Post
// $result = get_CURL('https://api.instagram.com/v1/users/self/media/recent/?access_token=2934880.f0b022f.ed7efe3174cc4a41a5fc7bf68eabd909&count=8');

// $photos = [];
// foreach ($result['data'] as $photo) {
//   $photos[] = $photo['images']['thumbnail']['url'];
// }

?>

@extends('layouts.main')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="position: relative;">
        <div class="carousel-item active">
            <img src="/storage/footer/pemandangan.jpg" alt="pemandangan" style="width: 100%; height: auto; position: relative;">
                <form action="/home">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    @if (request('genre'))
                        <input type="hidden" name="genre" value="{{ request('genre') }}">
                    @endif
                    <div class="container">
                        <div class="input-group mb-3" style="position: absolute; top: 50%; left:25%; width: 50%; text-align: center; margin: auto;">
                            <input type="text" class="form-control" placeholder="Cari judul.." name="search" value="{{ request('search') }}">
                            <button class="btn btn-secondary" style="background-color: rgba(5, 0, 36, 1);" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@section('container')

    <div class="container" style="margin-top: 80px;">
        <div class="row mb-4 pt-4">
            <div class="col text-center">
                <h2>Top Anime</h2>
            </div>
        </div>
        <div class="row mb-4 pt-4">
            {{-- <a href="/detail" style="text-decoration: none;"> --}}
            <?php foreach ($allAnime as $anim) : ?>
            <div class="col-md-3">
                <div class="card text-bg-dark">
                    <img class="card-img-top" src="<?= $anim['foto'] ?>" alt="{{ $anim['foto'] }}" class="card-img" >
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <p class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.7)"><?= $anim['judul'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            {{-- </a> --}}
        </div>
    </div>

    {{-- Anime Fall --}}
    <br><br>
    
    <div class="container">
        <div class="col text-center">
            <h2>Anime Fall</h2>
        </div>
        <hr>
        <div class="col text-end">
            <a href="/anime-fall">Lebih Banyak.....</a>
        </div>
        <br>
        <div class="container">
            <div class="row">
                @foreach ($anifall as $anime)
                {{-- @if($anime->category_id == 1) --}}
                    <div class="col-md-4 bb-3">
                        <div class="card" style="height: 900px; margin-bottom: 30px;">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7);"><a href="/{{ $anime->category->slug }}" class="text-white text-decoration-none">{{ $anime->category->name }}</a></div>
                                @if ($anime->image)
                                    <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->category->name }}" class="img-fluid" style="height: 500px;">
                                @else
                                    <img src="https://kitsu.io/api/edge/anime?filter[slug]={{ $anime->category->name }}" class="card-img-top" alt="{{ $anime->category->name }}">
                                @endif
                                <div class="card-body">
                                    <h4 class="card-title  text-center">{{ $anime->judul }}</h4>
                                    <p class=" text-center"><small class="text-muted">By. <a href="/home?author={{ $anime->author->name }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                                    <h5 class="card-text text-center"><a href="/{{ $anime->genre->slug }}" class="text-decoration-none">{{ $anime->genre->name }}</a></h5>
                                    <p class="card-text justify">{{ $anime->excerpt }}</p>
                                    <div class="d-flex justify-content-center">
                                        <a href="/detail/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                                        {{-- @if (DB::table('likes')->where('anime_id', '=', $anime->id)->where('user_id', '=', Auth::id())->first())
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
                                                Simpan
                                            </button>
                                        </form>
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        </div>
    </div>


    {{-- Anime Spring --}}
    <br><br>
    {{-- @if ($anispring->count()) --}}
    <div class="container">
        <div class="col text-center">
            <h2>Anime Spring</h2>
        </div>        
        <hr>
        <div class="col text-end">
            <a href="/anime-spring">Lebih Banyak.....</a>
        </div>
        <br>
        <div class="container">
            <div class="row">
                @foreach ($anispri as $anime)
                {{-- @if($anime->category_id == 2) --}}
                    <div class="col-md-4 bb-3">
                        <div class="card" style="height: 900px; margin-bottom: 30px;">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/{{ $anime->category->slug }}" class="text-white text-decoration-none">{{ $anime->category->name }}</a></div>
                            @if ($anime->image)
                            <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->category->name }}" class="img-fluid" style="height: 500px;">
                            @else
                                <img src="https://kitsu.io/api/edge/anime?filter[slug]={{ $anime->category->name }}" class="card-img-top" alt="{{ $anime->category->name }}">
                            @endif
                            <div class="card-body">
                                <h4 class="card-title  text-center">{{ $anime->judul }}</h4>
                                <p class=" text-center"><small class="text-muted">By. <a href="/home?author={{ $anime->author->name }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                                <h5 class="card-text text-center"><a href="/{{ $anime->genre->slug }}" class="text-decoration-none">{{ $anime->genre->name }}</a></h5>
                                <p class="card-text justify">{{ $anime->excerpt }}</p>
                                <div class="d-flex justify-content-center">
                                    <a href="/detail/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                                    {{-- @if (DB::table('likes')->where('anime_id', '=', $anime->id)->where('user_id', '=', Auth::id())->first())
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
                                    @endif --}}
                                </div>
                        </div>
                        </div>
                    </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        </div>
    </div>
    {{-- @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif --}}

    {{-- Anime Summer --}}
    <br><br>
    {{-- @if ($animes->count()) --}}
    <div class="container">
        <div class="col text-center">
            <h2>Anime Summer</h2>
        </div>
        <hr>
        <div class="col text-end">
            <a href="/anime-summer">Lebih Banyak.....</a>
        </div>
        <br>
        <div class="container">
            <div class="row">
                @foreach ($anisum as $anime)
                {{-- @if($anime->category_id == 3) --}}
                    <div class="col-md-4 bb-3">
                        <div class="card" style="height: 900px; margin-bottom: 30px;">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/{{ $anime->category->slug }}" class="text-white text-decoration-none">{{ $anime->category->name }}</a></div>
                            @if ($anime->image)
                                <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->category->name }}" class="img-fluid" style="height: 500px;">
                            @else
                                <img src="https://kitsu.io/api/edge/anime?filter[slug]={{ $anime->category->name }}" class="card-img-top" alt="{{ $anime->category->name }}">
                            @endif
                            <div class="card-body">
                                <h4 class="card-title  text-center">{{ $anime->judul }}</h4>
                                <p class=" text-center"><small class="text-muted">By. <a href="/home?author={{ $anime->author->name }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                                <h5 class="card-text text-center"><a href="/{{ $anime->genre->slug }}" class="text-decoration-none">{{ $anime->genre->name }}</a></h5>
                                <p class="card-text justify">{{ $anime->excerpt }}</p>
                                <div class="d-flex justify-content-center">
                                    <a href="/detail/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                                    {{-- @if (DB::table('likes')->where('anime_id', '=', $anime->id)->where('user_id', '=', Auth::id())->first())
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
                                    @endif --}}
                                </div>
                        </div>
                        </div>
                    </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        </div>
    </div>
    {{-- @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif --}}

    {{-- Anime Winter --}}
    <br><br>
    {{-- @if ($animes->count()) --}}
    <div class="container">
        <div class="col text-center">
            <h2>Anime Winter</h2>
        </div>
        <hr>
        <div class="col text-end">
            <a href="/anime-winter">Lebih Banyak.....</a>
        </div>
        <br>
        <div class="container">
            <div class="row">
                @foreach ($aniwin as $anime)
                {{-- @if($anime->category_id == 4) --}}
                    <div class="col-md-4 bb-3">
                        <div class="card" style="height: 900px; margin-bottom: 30px;">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/{{ $anime->category->slug }}" class="text-white text-decoration-none">{{ $anime->category->name }}</a></div>
                            @if ($anime->image)
                                <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->category->name }}" class="img-fluid" style="height: 500px;">
                            @else
                                <img src="https://kitsu.io/api/edge/anime?filter[slug]={{ $anime->category->name }}" class="card-img-top" alt="{{ $anime->category->name }}">
                            @endif
                            <div class="card-body">
                                <h4 class="card-title  text-center">{{ $anime->judul }}</h4>
                                <p class=" text-center"><small class="text-muted">By. <a href="/home?author={{ $anime->author->name }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                                <h5 class="card-text text-center"><a href="/{{ $anime->genre->slug }}" class="text-decoration-none">{{ $anime->genre->name }}</a></h5>
                                <p class="card-text justify">{{ $anime->excerpt }}</p>
                                <div class="d-flex justify-content-center">
                                    <a href="/detail/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                                    {{-- @if (DB::table('likes')->where('anime_id', '=', $anime->id)->where('user_id', '=', Auth::id())->first())
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
                                    @endif --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @endif --}}
                @endforeach
            </div>
        </div>
    </div>
    {{-- @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif --}}
    <br><br>
@endsection