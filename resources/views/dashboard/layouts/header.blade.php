{{-- <header class="navbar navbar-dark sticky-top flex-md-nowrap p-1 shadow" style="background-color: rgba(5, 0, 36, 1)"> --}}
    {{-- <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="http://127.0.0.1:8000/">Syntax Error</a> --}}
    {{-- <a class="navbar-brand" href="http://127.0.0.1:8000"><img src="/storage/footer/logo.png" alt="" style="max-height: 30px"></a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 bg-dark border-0">Logout <span data-feather="log-out" class="align-text-bottom"></span></button>
      </form>
      </div>
    </div> --}}

    <nav class="navbar navbar-expand-lg sticky-top flex-md-nowrap p-1 shadow" style="background-color: rgba(5, 0, 36, 1);">
      <div class="container-fluid">
        <a class="navbar-brand" href="http://127.0.0.1:8000">
          <img src="/storage/footer/logo.png" alt="" style="max-height: 30px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon bg-light"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <form action="/logout" method="post">
              @csrf
              <button type="button" class="btn btn-light">Logout <span data-feather="log-out" class="align-text-bottom"></span></button>
            </form>
        </div>
      </div>
    </nav>

  {{-- </header> --}}
