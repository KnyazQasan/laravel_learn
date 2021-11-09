<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ route('home') }}">Sailor</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}" class="active">Home</a></li>

          <li ><a href="{{ route('about') }}"><span>About</span> </a></li>
          <li><a href="{{ route('service') }}">Services</a></li>
          <li><a href="{{ route('portfolio') }}">Portfolio </a></li>

        <li class="dropdown"><a href="#">sub menu test<i class="bi bi-chevron-down"></i></a>

            <ul>
                <li><a href="{{ route('submenu', 'url-test1') }}">url-test1</a></li>
                <li><a href="{{ route('submenu', 'url-test2') }}">url-test2</a></li>
                <li><a href="{{ route('submenu', 'url-test3') }}">url-test3</a></li>
              </ul>

        </li>
          <li><a href="{{ route('blog') }}">Blog</a></li>

          <li><a href="{{ route('contact') }}">Contact</a></li>
          <li><a href="{{ route('home') }}" class="getstarted">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
