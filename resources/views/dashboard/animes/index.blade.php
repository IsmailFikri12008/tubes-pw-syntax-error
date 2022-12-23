@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Anime Post List</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-12">
        <a href="/dashboard/animes/create" class="btn btn-primary mb-3">Create new post anime</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Category</th>
                    <th scope="col">Tipe</th>
                    <th scope="col">Episode</th>
                    <th scope="col">Status</th>
                    <th scope="col">Rilis</th>
                    <th scope="col">Primer</th>
                    <th scope="col">Produser</th>
                    <th scope="col">Lisensi</th>
                    <th scope="col">Studio</th>
                    <th scope="col">Sumber</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Demografis</th>
                    <th scope="col">Durasi</th>
                    <th scope="col">Rating</th>
                </tr>
            </thead>
          <tbody>
            @foreach ($animes as $an)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $an->judul }}</td>
                <td>{{ $an->category->name }}</td>
                <td>{{ $an->tipe }}</td>
                <td>{{ $an->episode }}</td>
                <td>{{ $an->status }}</td>
                <td>{{ $an->rilis }}</td>
                <td>{{ $an->primer }}</td>
                <td>{{ $an->produser }}</td>
                <td>{{ $an->lisensi }}</td>
                <td>{{ $an->studio }}</td>
                <td>{{ $an->sumber }}</td>
                <td>{{ $an->genre }}</td>
                <td>{{ $an->demografis }}</td>
                <td>{{ $an->durasi }}</td>
                <td>{{ $an->rating }}</td>
                <td>
                    <a href="/dashboard/animes/{{ $an->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/dashboard/animes/{{ $an->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/animes/{{ $an->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Apakah kamu yakin?')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection
