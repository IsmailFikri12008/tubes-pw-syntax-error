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


@endsection
