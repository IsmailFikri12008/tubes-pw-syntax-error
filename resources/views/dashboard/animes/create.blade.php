@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Anime Post</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/animes" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required autofocus value="{{ old('judul') }}">
            @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div  class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
            @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div  class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    @if(old('category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div  class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <select class="form-select" name="genre_id">
                @foreach ($genres as $genre)
                    @if(old('genre_id') == $genre->id)
                        <option value="{{ $genre->id }}" selected>{{ $genre->name }}</option>
                    @else
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <input type="text" class="form-control @error('tipe') is-invalid @enderror" id="tipe" name="tipe" required autofocus value="{{ old('tipe') }}">
            @error('tipe')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="episode" class="form-label">Episode</label>
            <input type="text" class="form-control @error('episode') is-invalid @enderror" id="episode" name="episode" required autofocus value="{{ old('episode') }}">
            @error('episode')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" required autofocus value="{{ old('status') }}">
            @error('status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="rilis" class="form-label">Rilis</label>
            <input type="text" class="form-control @error('rilis') is-invalid @enderror" id="rilis" name="rilis" required autofocus value="{{ old('rilis') }}">
            @error('rilis')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="primer" class="form-label">Primer</label>
            <input type="text" class="form-control @error('primer') is-invalid @enderror" id="primer" name="primer" required autofocus value="{{ old('primer') }}">
            @error('primer')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tayang" class="form-label">Tayang</label>
            <input type="text" class="form-control @error('tayang') is-invalid @enderror" id="tayang" name="tayang" required autofocus value="{{ old('tayang') }}">
            @error('tayang')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="produser" class="form-label">Produser</label>
            <input type="text" class="form-control @error('produser') is-invalid @enderror" id="produser" name="produser" required autofocus value="{{ old('produser') }}">
            @error('produser')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="lisensi" class="form-label">Lisensi</label>
            <input type="text" class="form-control @error('lisensi') is-invalid @enderror" id="lisensi" name="lisensi" required autofocus value="{{ old('lisensi') }}">
            @error('lisensi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="studio" class="form-label">Studio</label>
            <input type="text" class="form-control @error('studio') is-invalid @enderror" id="studio" name="studio" required autofocus value="{{ old('studio') }}">
            @error('studio')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sumber" class="form-label">Sumber</label>
            <input type="text" class="form-control @error('sumber') is-invalid @enderror" id="sumber" name="sumber" required autofocus value="{{ old('sumber') }}">
            @error('sumber')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        {{-- <div class="mb-3">
            <label for="genre" class="form-label">Genre</label>
            <input type="text" class="form-control @error('genre') is-invalid @enderror" id="genre" name="genre" required autofocus value="{{ old('genre') }}">
            @error('genre')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div> --}}
        <div class="mb-3">
            <label for="demografis" class="form-label">Demografis</label>
            <input type="text" class="form-control @error('demografis') is-invalid @enderror" id="demografis" name="demografis" required autofocus value="{{ old('demografis') }}">
            @error('demografis')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi</label>
            <input type="text" class="form-control @error('durasi') is-invalid @enderror" id="durasi" name="durasi" required autofocus value="{{ old('durasi') }}">
            @error('durasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <input type="text" class="form-control @error('rating') is-invalid @enderror" id="rating" name="rating" required autofocus value="{{ old('rating') }}">
            @error('rating')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="is_rekomendasi" class="form-label">Rekomendasi atau Tidak</label>
            <input type="text" class="form-control @error('is_rekomendasi') is-invalid @enderror" id="is_rekomendasi" name="is_rekomendasi" required autofocus value="{{ old('is_rekomendasi') }}">
            @error('is_rekomendasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Anime Image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div  class="mb-3">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            @error('sinopsis')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <input id="sinopsis" type="hidden" name="sinopsis" value="{{ old('sinopsis') }}">
            <trix-editor input="sinopsis"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Create Anime Post</button>
        <a href="/dashboard/animes" class="btn btn-primary"><span data-feather="arrow-left"></span> Kembali Ke Dashboard</a>
    </form>
</div>

<script>
    const judul = document.querySelector('#judul');
    const slug = document.querySelector('#slug');

    judul.addEventListener('change', function() {
        fetch('/dashboard/animes/checkSlug?judul=' + judul.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview')

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
    }

}

</script>
@endsection
