<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid nav-mobile">
        <div>

            <a class="navbar-brand col-12" href=" {{ route("ads.index")}}">
                <img src="/img/logo.png" alt="logo-img" class="imglogo">
                <span class="title">Rapido.es </span> 
            </a>

        </div>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse navbar-decoration" id="navbarSupportedContent">
        <ul class="navbar-nav container-fluid justify-content-around">
          <li class="nav-item">
            @if (Auth::check())    
            <a class="nav-link" href=" {{ route("ads.create")}}">Sube Tu Articulo</a>
            @endif
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu">
              <div class="row">
                <div class="col-6 mt-3">
                <h3 class="text-center catone">Tecnologías</h3>
                  <li><a class="dropdown-item text-center list-cat" href="#">Mac</a></li>
                  <li><a class="dropdown-item text-center list-cat" href="#">Hp</a></li>
                </div>

                <div class="col-6 mt-3">
                <h3 class="text-center cattwo">Muebles</h3>
                  <li><a class="dropdown-item text-center list-cat" href="#">Sofa</a></li>
                  <li><a class="dropdown-item text-center list-cat" href="#">Cama</a></li>
                </div>

                <div class="col-6 mt-3">
                <h3 class="text-center catthree">Coches</h3>
                    <li><a class="dropdown-item text-center list-cat" href="#">Ferrari</a></li>
                    <li><a class="dropdown-item text-center list-cat" href="#">Fiat</a></li>
                </div>

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
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                  </a>
                  <ul class="dropdown-menu">
                    <li><a id="logoutBtn" class="nav-link">Salir</a></li>
                  </ul>
                </li>
              </li>
              @endguest
                      </ul>
                    </div>
                  </div>
                </nav>