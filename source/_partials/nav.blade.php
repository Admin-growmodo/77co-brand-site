<nav class="navbar navbar-expand-md navbar-fixed-top navbar-bg-switch main-navigation">
  {{-- container start --}}
  <div class="container-fluid p-0">
    <a class="navbar-brand logo ms-5" href="/">
      <img alt="Logo" class="logo-light" src="{{ mix('img/seventy-seven-collective-icon-logo.webp', 'assets/build') }}" width="50">
      <img alt="Logo" class="logo-dark" src="{{ mix('img/seventy-seven-collective-icon-logo.webp', 'assets/build') }}" width="50">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
      <ion-icon class="navbar_toggler_icon" name="menu-outline"></ion-icon>
    </button>

    <div class="collapse navbar-collapse mt-md-0" id="navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item lightColor">
          <a class="nav-link header-navbar-link" href="/">Home</a>
        </li>
        <li class="nav-item lightColor">
          <a class="nav-link header-navbar-link" href="/works">Works</a>
        </li>
{{--        <li class="nav-item lightColor">--}}
{{--          <a class="nav-link header-navbar-link" href="about.html">About</a>--}}
{{--        </li>--}}
{{--        <li class="nav-item lightColor">--}}
{{--          <a class="nav-link header-navbar-link" href="news.html">News</a>--}}
{{--        </li>--}}
        <li class="nav-item lightColor">
          <a class="nav-link header-navbar-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
  {{-- container end --}}
</nav>
