<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  </head>

  <body>
    <div class="container text-center" style="margin-left: 150px;">
      <div class="row">
        <div class="col">
          <h1 style="margin-top: 10%; font-size: 70px;" class="text-center">Form Masuk</h1>
          <br>
          <br>
          <form class="text-start">
            <div class="mb-3">
              <label for="email" class="email">Email</label>
              <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
              <label for="password" class="email">Password</label>
              <input type="password" class="form-control" id="password">
            </div>
            <small class="d-block text-center mt-3">
              Belum punya akun? <a href="/register">Daftar disini</a>
            </small>
            <br>
          </form>
          <button type="submit" class="btn btn-dark" style="background-color: #050024">Masuk</button>
        </div>
        <div class="col text-center" >
          <img src="https://i.pinimg.com/originals/bc/ac/b4/bcacb44ddb47d02a6ba78a6c8a990871.jpg" alt="" style="height: 720px;">
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>