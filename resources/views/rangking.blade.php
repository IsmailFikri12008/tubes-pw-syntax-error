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
        width: 400px;
        left: 320px;
        top: 50%;
    }
    .judul h1:after {
        content: " ";
        position: absolute;
        border-bottom: 1px solid black;
        width: 400px;
        right: 320px;
        top: 50%;
    }
</style>
<div class="judul">
    <h1 class="text-center">{{ $judul }}</h1>
</div>
<br>
<br>
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th scope="col" style="text-align: center;">Rank</th>
            <th scope="col" style="text-align: center;">Judul</th>
            <th scope="col" style="text-align: center;">Rating</th>
            <th scope="col" style="text-align: center;">Gambar</th>
        </tr>
    </thead>
<tbody>
    @foreach ($animes as $an)
        <tr>
            <td style="text-align: center;">{{ $loop->iteration }}</td>
            <td style="text-align: center;">{{ $an->judul }}</td>
            <td style="text-align: center;">{{ $an->rating }}</td>
            <td style="text-align: center;"><img src="{{ asset('storage/' . $an->image) }}" alt="{{ $an->category->name }}" class="img-fluid object-fit"></td>
        </tr>
    @endforeach
</tbody>
</table>
<div class="d-flex justify-content-end">
    {{ $animes->links() }}
</div>
@endsection
