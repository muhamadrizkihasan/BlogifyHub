<nav class="navbar navbar-expand-lg navbar-dark bg-primary ms-auto">
    <div class="container">
      <a class="navbar-brand" href="/">𝕄𝕦𝕙𝕒𝕞𝕒𝕕 ℝ𝕚𝕫𝕜𝕚 ℍ𝕒𝕤𝕒𝕟</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "categories") ? 'active' : '' }}" href="/categories">Kategori</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          @auth
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a href="/dashboard" class="dropdown-item"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          @else
              <li class="nav-item">
                <a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
          @endauth
          
        </ul>
      </div>
    </div>
  </nav>
  