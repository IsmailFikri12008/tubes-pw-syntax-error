<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


  <style>
    body{
      background-image: url("/storage/footer/kimetsu-resize.jpg");
      width: 100%;
      height: auto;
      color: white;
    }

    h1{
      margin-top: 5%;
      text-align: center;
      margin-bottom: 5%;
    }

    .card{
      background:rgba(0, 0, 0, 0.5);
    }
  </style>

</head>
<body>
  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

  <div class="container">
    <div class="card position-absolute top-50 start-50 translate-middle" style="width: 20rem;">
      <h1>Form Masuk</h1>
      <div class="container">
        <div class="card-body">
          <form class="text-start" action="/login" method="post">
            @csrf
            <div class="mb-4">
              <label for="email" class="email">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" au placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
              <label for="password" class="email">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <small class="d-block text-center mt-3">
              Belum punya akun? <a href="/register">Daftar disini</a>
            </small>
            <br>
            <div class="container text-center">
                <button type="submit" class="btn btn-dark" style="background-color: #050024">Masuk</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  </head>

  <body>
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <img src="/storage/footer/pemandangan.jpg" alt="">
    <div class="container text-center" style="margin-left: 150px;">
      <div class="row">
        <div class="col">
          <h1 style="margin-top: 10%; font-size: 70px;" class="text-center">Form Masuk</h1>
          <br>
          <br>
          <form class="text-start" action="/login" method="post">
            @csrf
            <div class="mb-3">
              <label for="email" class="email">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" au placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="password" class="email">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <small class="d-block text-center mt-3">
              Belum punya akun? <a href="/register">Daftar disini</a>
            </small>
            <br>
            <div class="container text-center">
                <button type="submit" class="btn btn-dark" style="background-color: #050024">Masuk</button>
            </div>
          </form>
        </div>
        <div class="col" >
          <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 720px; width:700px; position: absolute; right:0px; top:0px;">
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html> --}}


{{-- <!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

<style>
body {
  font-family: Arial;
}

h1 {
  font-size: 50px;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
}

.right {
  right: 0;
}

.centered-1 {
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-20%, -50%);
  text-align: center;
}

.centered-2 {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-20%, -50%);
  text-align: center;
}

</style>
</head>
<body>

<div class="split left">
  <div class="centered-1">
    <h1 class="text-center">Form Masuk</h1> 
    <br>
    <form class="text-start" action="/login" method="post">
      @csrf
      <div class="mb-4">
        <label for="email" class="email">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" au placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
          @enderror
      </div>
      <div class="mb-4">
        <label for="password" class="email">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
      </div>
      <small class="d-block text-center mt-3">
        Belum punya akun? <a href="/register">Daftar disini</a>
      </small>
      <br>
      <div class="container text-center">
          <button type="submit" class="btn btn-dark" style="background-color: #050024">Masuk</button>
      </div>
    </form>
  </div>
</div>

<div class="split right">
  <div class="centered-2">
    <img src="/storage/footer/gambar-login-resize.jpg" alt="" style="width: 1080px">
  </div>
</div>
     

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>  --}}
