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
        width: 460px;
        left: 10px;
        top: 50%;
    }
    .judul h1:after {
        content: " ";
        position: absolute;
        border-bottom: 1px solid black;
        width: 460px;
        right: 10px;
        top: 50%;
    }
</style>

<div class="judul">
    <h1 class="text-center">{{ $judul }}</h1>
</div>
<br>

{{-- <div class="row justify-content-center">
    <div class="col-lg-4">
        <div class="card">
            <div class="card">
                <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" class="responsive" alt="">
                <div class="card-body">
                    <h2>Informasi</h2>
                    <hr>
                    <p class="card-text">Tipe :</p>
                    <p class="card-text">Episode :</p>
                    <p class="card-text">Status :</p>
                    <p class="card-text">Rilis :</p>
                    <p class="card-text">Primer :</p>
                    <p class="card-text">Tayang :</p>
                    <p class="card-text">Produser :</p>
                    <p class="card-text">Lisensi :</p>
                    <p class="card-text">Studio :</p>
                    <p class="card-text">Sumber :</p>
                    <p class="card-text">Genre :</p>
                    <p class="card-text">Demografis :</p>
                    <p class="card-text">Durasi :</p>
                    <p class="card-text">Rating :</p>
                </div>
            </div>
        </div>
    </div>


    <div class="col-lg-6 justify">
        <h2>Sinopsis</h2>
        <hr>
        <p class="card-text" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id dolor vel metus hendrerit bibendum. Suspendisse mattis neque urna, iaculis congue purus posuere id. In hac habitasse platea dictumst. Sed commodo elementum euismod. In vitae semper nisl. Vestibulum hendrerit, justo ac malesuada convallis, neque ante sollicitudin tellus, eget lacinia arcu leo eget libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum leo molestie lorem ultricies, nec gravida sapien sollicitudin.
            Ut congue, neque in semper fringilla, dolor ex malesuada massa, id sagittis tellus eros et nulla. Mauris efficitur dapibus venenatis. Donec ut consequat quam. Aenean lorem lacus, hendrerit sed velit vel, venenatis sodales neque. Fusce aliquam nisl sit amet magna sagittis, non mattis mauris blandit. Morbi felis neque, imperdiet in magna nec, ultrices lobortis ex. Nam sodales sem ut suscipit lacinia.
            Vivamus vulputate sagittis ante a malesuada. Ut risus mi, efficitur vel lectus vel, bibendum elementum enim. Proin ultricies justo interdum massa pharetra, eu aliquet dolor fermentum. Mauris vel mauris consectetur, lacinia urna vitae, rutrum nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur luctus condimentum diam eget volutpat. Cras velit tellus, viverra non scelerisque in, hendrerit ac sem. Vivamus venenatis nisl at elit maximus, et ullamcorper metus convallis. Aenean sollicitudin ultricies sapien, eget dapibus felis tristique sed.
            In rhoncus velit sit amet tortor ultrices, a posuere justo laoreet. Sed luctus mi sit amet purus varius egestas. Pellentesque vel ligula consectetur, maximus ipsum eu, viverra sapien. Mauris sit amet iaculis dolor. Aliquam dui metus, elementum at accumsan eget, vulputate non enim. Ut ultrices rhoncus leo, sit amet hendrerit mi gravida id. Ut nec sapien luctus, tristique ipsum non, aliquam felis. Mauris iaculis finibus mauris ut placerat. In porttitor ultrices sem in sagittis. Nam non auctor nisi.</p>
        <p class="card-text" style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris id dolor vel metus hendrerit bibendum. Suspendisse mattis neque urna, iaculis congue purus posuere id. In hac habitasse platea dictumst. Sed commodo elementum euismod. In vitae semper nisl. Vestibulum hendrerit, justo ac malesuada convallis, neque ante sollicitudin tellus, eget lacinia arcu leo eget libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum leo molestie lorem ultricies, nec gravida sapien sollicitudin.
            Ut congue, neque in semper fringilla, dolor ex malesuada massa, id sagittis tellus eros et nulla. Mauris efficitur dapibus venenatis. Donec ut consequat quam. Aenean lorem lacus, hendrerit sed velit vel, venenatis sodales neque. Fusce aliquam nisl sit amet magna sagittis, non mattis mauris blandit. Morbi felis neque, imperdiet in magna nec, ultrices lobortis ex. Nam sodales sem ut suscipit lacinia.
            Vivamus vulputate sagittis ante a malesuada. Ut risus mi, efficitur vel lectus vel, bibendum elementum enim. Proin ultricies justo interdum massa pharetra, eu aliquet dolor fermentum. Mauris vel mauris consectetur, lacinia urna vitae, rutrum nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur luctus condimentum diam eget volutpat. Cras velit tellus, viverra non scelerisque in, hendrerit ac sem. Vivamus venenatis nisl at elit maximus, et ullamcorper metus convallis. Aenean sollicitudin ultricies sapien, eget dapibus felis tristique sed.
            In rhoncus velit sit amet tortor ultrices, a posuere justo laoreet. Sed luctus mi sit amet purus varius egestas. Pellentesque vel ligula consectetur, maximus ipsum eu, viverra sapien. Mauris sit amet iaculis dolor. Aliquam dui metus, elementum at accumsan eget, vulputate non enim. Ut ultrices rhoncus leo, sit amet hendrerit mi gravida id. Ut nec sapien luctus, tristique ipsum non, aliquam felis. Mauris iaculis finibus mauris ut placerat. In porttitor ultrices sem in sagittis. Nam non auctor nisi.</p>
            <br>
            <div class="container text-center">
                <a href="/">
                    <button type="button" class="btn btn-secondary" style="background-color: rgba(5, 0, 36, 1);">Kembali</button>
                </a>
            </div>
    </div>

</div> --}}

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $animes->judul }}</h1>
            <p>By. <a href="/animes?author={{ $animes->author->username }}" class="text-decoration-none">{{ $animes->author->name }}</a> in <a href="/animes?category={{ $animes->category->slug }}" class="text-decoration-none">{{ $animes->category->name }}</a></p>

            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card">
                            @if ($animes->image)
                            <div style="max-height: 350px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $animes->image) }}" alt="{{ $animes->category->name }}" class="img-fluid">
                            </div>
                            @else
                                <img src="https://source.unsplash.com/1200x400?{{ $animes->category->name }}" alt="{{ $animes->category->name }}" class="img-fluid">
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
                                <p class="card-text">Genre : {!! $animes->genre !!}</p>
                                <p class="card-text">Demografis : {!! $animes->demografis !!}</p>
                                <p class="card-text">Durasi : {!! $animes->durasi !!}</p>
                                <p class="card-text">Rating : {!! $animes->rating !!}</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 justify">
                    <h2>Sinopsis</h2>
                    <hr>
                    <article class="my-3 fs-5">
                        {!! $animes->sinopsis !!}
                    </article>
                        <br>
                        <div class="container text-center">
                            <a href="/">
                                <button type="button" class="btn btn-secondary" style="background-color: rgba(5, 0, 36, 1);">Kembali</button>
                            </a>
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>

<br>
{{-- <div class="container text-center">
    <a href="/">
        <button type="button" class="btn btn-secondary" style="background-color: rgba(5, 0, 36, 1)">Kembali</button>
    </a>
</div> --}}

<br>
<br>
@endsection
