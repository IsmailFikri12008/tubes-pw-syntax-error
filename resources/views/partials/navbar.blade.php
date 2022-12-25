<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: rgba(5, 0, 36, 1)">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/storage/footer/logo.png" alt="" style="max-height: 30px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Beranda</a>
            </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Anime Populer
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="/fall">Anime Fall</a>
                </li>
                <li>
                    <a class="dropdown-item" href="/spring">Anime Spring</a>
                </li>
                <li>
                    <a class="dropdown-item" href="/summer">Anime Summer</a>
                </li>
                <li>
                    <a class="dropdown-item" href="/winter">Anime Winter</a>
                </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "rekomendasi") ? 'active' : '' }}" href="/rekomendasi">Rekomendasi</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ($active === "rangking") ? 'active' : '' }}" href="/rangking">Rangking Anime</a>
        </li>
        </ul>

        <ul class="navbar-nav ms-auto">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Welcome Back, {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                    </ul>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "login") ? 'active' : '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
            </ul>
            @endauth

      </div>
    </div>
  </nav>
