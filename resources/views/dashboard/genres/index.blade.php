@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List Genre Anime</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-6" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-6">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Genre Name</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($genres as $genre)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $genre->name }}</td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection
