@extends('layouts.main')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="position: relative;">
        <div class="carousel-item active">
            <img src="/storage/footer/pemandangan.jpg" alt="pemandangan" style="width: 1680px; height: 650px; position: relative;">
                <form action="/home">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="container" >
                        <div class="input-group mb-3" style="position: absolute; top: 50%; width: 50%; text-align: center; margin: auto;">
                            <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                            <button class="btn btn-danger" type="submit">Search</button>
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

        <div class="row mb-4">
            <div class="col-md">
                <div class="card">
                    <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 250px;">
                    <a href="/detail">
                    <a href="/detail">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </a>
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
                <h2>Spring 2022 Anime</h2>
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
    </div>


@endsection
