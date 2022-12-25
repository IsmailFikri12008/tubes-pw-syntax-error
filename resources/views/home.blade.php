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
                    <div class="container">
                        <div class="input-group mb-3" style="position: absolute; top: 50%; left:25%; width: 50%; text-align: center; margin: auto;">
                            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
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

    @if ($animes->count())
    <div class="container">
        <div class="col text-left">
            <h2>Anime Fall</h2>
        </div>
        <hr>
        <div class="col text-end">
            <a href="/fall">Lebih Banyak.....</a>
        </div>

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
                            <h5 class="card-title">{{ $anime->judul }}</h5>
                            <p><small class="text-muted">By. <a href="/animes?author={{ $anime->author->username }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $anime->excerpt }}</p>
                            <a href="/animes/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

    @if ($animes->count())
    <div class="container">
        <div class="col text-left">
            <h2>Anime Spring</h2>
        </div>
        <hr>
        <div class="col text-end">
            <a href="/spring">Lebih Banyak.....</a>
        </div>

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
                            <h5 class="card-title">{{ $anime->judul }}</h5>
                            <p><small class="text-muted">By. <a href="/animes?author={{ $anime->author->username }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $anime->excerpt }}</p>
                            <a href="/animes/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

    @if ($animes->count())
    <div class="container">
        <div class="col text-left">
            <h2>Anime Summer</h2>
        </div>
        <hr>
        <div class="col text-end">
            <a href="/summer">Lebih Banyak.....</a>
        </div>

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
                            <h5 class="card-title">{{ $anime->judul }}</h5>
                            <p><small class="text-muted">By. <a href="/animes?author={{ $anime->author->username }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $anime->excerpt }}</p>
                            <a href="/animes/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

    @if ($animes->count())
    <div class="container">
        <div class="col text-left">
            <h2>Anime Winter</h2>
        </div>
        <hr>
        <div class="col text-end">
            <a href="/winter">Lebih Banyak.....</a>
        </div>

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
                            <h5 class="card-title">{{ $anime->judul }}</h5>
                            <p><small class="text-muted">By. <a href="/animes?author={{ $anime->author->username }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $anime->excerpt }}</p>
                            <a href="/animes/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif
    {{-- <div class="d-flex justify-content-end">
        {{ $animes->links() }}
    </div> --}}

    {{-- @if ($animes->count())
    <div class="container">
        <div class="col text-left">
            <h2>Anime Fall</h2>
        </div>
        <hr>
        <div class="col text-end">
            <a href="/fall">Lebih Banyak.....</a>
        </div>

        <div class="card mb-3">
            @if ($animes[0]->image)
                <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $animes[0]->image) }}" alt="{{ $animes[0]->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $animes[0]->category->name }}" class="card-img-top" alt="{{ $animes[0]->category->name }}">
            @endif
                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/posts/{{ $animes[0]->slug }}" class="text-decoration-none text-dark">{{ $animes[0]->title }}</a></h3>
                    <p><small class="text-muted">By. <a href="/posts?author={{ $animes[0]->author->username }}" class="text-decoration-none">{{ $animes[0]->author->name }}</a> in <a href="/posts?category={{ $animes[0]->category->slug }}" class="text-decoration-none">{{ $animes[0]->category->name }}</a> {{ $animes[0]->created_at->diffForHumans() }}</small></p>
                    <p class="card-text">{{ $animes[0]->excerpt }}</p>
                    <a href="/posts/{{ $animes[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($animes->skip(1) as $anime)
                    <div class="col-md-4 bb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $anime->category->slug }}" class="text-white text-decoration-none">{{ $anime->category->name }}</a></div>
                            @if ($anime->image)
                                <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->category->name }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $anime->category->name }}" class="card-img-top" alt="{{ $anime->category->name }}">
                            @endif
                            <div class="card-body">
                            <h5 class="card-title">{{ $anime->title }}</h5>
                            <p><small class="text-muted">By. <a href="/posts?author={{ $anime->author->username }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $anime->excerpt }}</p>
                            <a href="/posts/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif

    @if ($animes->count())
    <div class="container">
        <div class="col text-left">
            <h2>Anime Fall</h2>
        </div>
        <hr>
        <div class="col text-end">
            <a href="/fall">Lebih Banyak.....</a>
        </div>

        <div class="card mb-3">
            @if ($animes[0]->image)
                <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $animes[0]->image) }}" alt="{{ $animes[0]->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $animes[0]->category->name }}" class="card-img-top" alt="{{ $animes[0]->category->name }}">
            @endif
                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/posts/{{ $animes[0]->slug }}" class="text-decoration-none text-dark">{{ $animes[0]->title }}</a></h3>
                    <p><small class="text-muted">By. <a href="/posts?author={{ $animes[0]->author->username }}" class="text-decoration-none">{{ $animes[0]->author->name }}</a> in <a href="/posts?category={{ $animes[0]->category->slug }}" class="text-decoration-none">{{ $animes[0]->category->name }}</a> {{ $animes[0]->created_at->diffForHumans() }}</small></p>
                    <p class="card-text">{{ $animes[0]->excerpt }}</p>
                    <a href="/posts/{{ $animes[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($animes->skip(1) as $anime)
                    <div class="col-md-4 bb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $anime->category->slug }}" class="text-white text-decoration-none">{{ $anime->category->name }}</a></div>
                            @if ($anime->image)
                            <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->category->name }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $anime->category->name }}" class="card-img-top" alt="{{ $anime->category->name }}">
                            @endif
                            <div class="card-body">
                            <h5 class="card-title">{{ $anime->title }}</h5>
                            <p><small class="text-muted">By. <a href="/posts?author={{ $anime->author->username }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $anime->excerpt }}</p>
                            <a href="/posts/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @else
    <p class="text-center fs-4">No Post Found.</p>
    @endif

    @if ($animes->count())
    <div class="container">
        <div class="col text-left">
            <h2>Anime Fall</h2>
        </div>
        <hr>
        <div class="col text-end">
            <a href="/fall">Lebih Banyak.....</a>
        </div>

        <div class="card mb-3">
            @if ($animes[0]->image)
                <div style="max-height: 400px; overflow: hidden;">
                    <img src="{{ asset('storage/' . $animes[0]->image) }}" alt="{{ $animes[0]->category->name }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $animes[0]->category->name }}" class="card-img-top" alt="{{ $animes[0]->category->name }}">
            @endif
                <div class="card-body text-center">
                    <h3 class="card-title"><a href="/posts/{{ $animes[0]->slug }}" class="text-decoration-none text-dark">{{ $animes[0]->title }}</a></h3>
                    <p><small class="text-muted">By. <a href="/posts?author={{ $animes[0]->author->username }}" class="text-decoration-none">{{ $animes[0]->author->name }}</a> in <a href="/posts?category={{ $animes[0]->category->slug }}" class="text-decoration-none">{{ $animes[0]->category->name }}</a> {{ $animes[0]->created_at->diffForHumans() }}</small></p>
                    <p class="card-text">{{ $animes[0]->excerpt }}</p>
                    <a href="/posts/{{ $animes[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($animes->skip(1) as $anime)
                    <div class="col-md-4 bb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/posts?category={{ $anime->category->slug }}" class="text-white text-decoration-none">{{ $anime->category->name }}</a></div>
                            @if ($anime->image)
                                <img src="{{ asset('storage/' . $anime->image) }}" alt="{{ $anime->category->name }}" class="img-fluid">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $anime->category->name }}" class="card-img-top" alt="{{ $anime->category->name }}">
                            @endif
                            <div class="card-body">
                            <h5 class="card-title">{{ $anime->title }}</h5>
                            <p><small class="text-muted">By. <a href="/posts?author={{ $anime->author->username }}" class="text-decoration-none">{{ $anime->author->name }}</a> {{ $anime->created_at->diffForHumans() }}</small></p>
                            <p class="card-text">{{ $anime->excerpt }}</p>
                            <a href="/posts/{{ $anime->slug }}" class="btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @else
        <p class="text-center fs-4">No Post Found.</p>
    @endif --}}

    {{-- <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-left">
                <h2>Fall 2022 Anime</h2>
            </div>
        </div>
        <hr>
        <div class="row mb-4 pt-4">
            <div class="col text-end">
                <a href="/">Lebih Banyak.....</a>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-left">
                <h2>{{ $category[0]->name }}</h2>
            </div>
        </div>
        <hr>
        <div class="row mb-4 pt-4">
            <div class="col text-end">
                <a href="/">Lebih Banyak.....</a>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-left">
                <h2>Summer 2022 Anime</h2>
            </div>
        </div>
        <hr>
        <div class="row mb-4 pt-4">
            <div class="col text-end">
                <a href="/">Lebih Banyak.....</a>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-left">
                <h2>Winter 2022 Anime</h2>
            </div>
        </div>
        <hr>
        <div class="row mb-4 pt-4">
            <div class="col text-end">
                <a href="/">Lebih Banyak.....</a>
            </div>
        </div>

        <div class="row mb-4">
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}


@endsection
