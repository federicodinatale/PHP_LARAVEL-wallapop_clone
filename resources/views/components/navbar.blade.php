<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div>

            <a class="navbar-brand col-12" href=" {{ route("ads.index")}}">
                <img src="./img/logo.png" alt="logo-img" class="col-12 imglogo" width="5px">
                <span>Rapido.es </span> 
            </a>

        </div>


      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse navbar-decoration" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-center">
          <li class="nav-item">
            <a class="nav-link" href=" {{ route("ads.create")}}">Sube Tu Articulo</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categorias
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Tecnologías </a></li>
              <li><a class="dropdown-item" href="#">Muebles </a></li>
              <li><a class="dropdown-item" href="#">Informatica </a></li>
              <li><a class="dropdown-item" href="#">Coches </a></li>

              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Diganos una categoria nueva</a></li>
            </ul>
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
  <a id="logoutBtn" class="nav-link" href="#">Salir</a>
</li>
@endguest
        </ul>
      </div>
    </div>
  </nav>