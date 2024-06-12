<header class="position-fixed w-100 z-3">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item {{ Request::route()->getName() === 'home' ? 'active' : '' }}">
                <a class="nav-link " aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="">
                    <img class="md_img-logo" src="{{ Vite::asset('resources/img/boolean-logo.png') }}" alt="">
                </a>
              </li>

              <li class="nav-item {{ Request::route()->getName() === 'cards' ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('cards') }}">Cards</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
</header>