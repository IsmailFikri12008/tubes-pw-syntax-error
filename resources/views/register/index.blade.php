<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  </head>

  <body>
    <div class="container text-center" style="margin-left: 150px;">
      <div class="row">
        <div class="col">
          <h1 style="margin-top: 10%; font-size: 70px;" class="text-center">Form Daftar</h1>
          <br>
          <br>
          <form action="/register" method="post">
            @csrf
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <input type="text" name="is_admin" id="is_admin" value="0" hidden >
            <button type="submit" class="btn btn-dark" style="background-color: #050024">Daftar</button>
        </form>
            <small class="d-block text-center mt-3">Allready registered? <a href="/login">Login</a></small>
        </div>
        <div class="col text-center" >
          <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 720px; width:700 px; position:absolute; top:0px; right:0px ">
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
