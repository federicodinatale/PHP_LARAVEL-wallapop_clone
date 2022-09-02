<nav class="navbar navbar-expand-lg">
    <div class="container-fluid nav-mobile">
        <div>

            <a class="navbar-brand col-12" href=" {{ route("ads.index")}}">
                <img src="/img/logo.png" alt="logo-img" class="imglogo">
                <span class="title">Rapido.es </span> 
            </a>

        </div>
        <form class="d-flex" role="search">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search search-icon" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg>
          <input class="form-control me-2 search-navbar" type="search" placeholder="Buscar en Todas las categorias" aria-label="Search">
        </form>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navbar-decoration" id="navbarSupportedContent">
        <ul class="navbar-nav container-fluid justify-content-around">
          <li class="nav-item">

            @if (Auth::check())    
            <a class="nav-link add-article" href=" {{ route("ads.create")}}"> Sube Tu Articulo</a>
            @endif

          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle category-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
            <ul class="dropdown-menu">
              <div class="row">

                  @foreach ($categories as $category)

                  <div class="col-6 mt-3">
                    <li><a class="dropdown-item text-center list-cat cat{{$loop->iteration}}" href="{{route('category.ads',$category)}}">{{$category->name}}</a></li>

                    </div>
                  @endforeach

              </div>
            </ul>
          </li>
          </li>
          


              @guest
              @if (Route::has('login'))
              <li class="nav-item ">
                <a class="nav-link"
                href="{{route('login')}}"><span>Login</span></a>
              </li>
              @endif    
              @if (Route::has('register'))
              <li class="nav-item">
                <a class="nav-link"
                href="{{route('register')}}"><span>Registrar</span></a>
              </li>
              @endif
              @else
              <li class="nav-item">
                <form id="logoutForm" action="{{route('logout')}}" method="POST">
                  @csrf
                </form>

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle user-name-nav" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu" id="logout-menu">
                    <li><button id="logoutBtn" class="nav-link btn btn-outline-danger logout-btn">Salir</button></li>
                  </ul>
                </li>
              </li>
              @endguest
                      </ul>
                    </div>
                  </div>
                </nav>