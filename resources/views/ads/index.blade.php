
<x-layout>
    <x-slot name='title'>Rapido - Homepage</x-slot>
    <p class="text-center title-secondary">Rapido, la plataforma líder de compraventa de productos de segunda mano</p>
    <h1 class="text-center mt-2">¿Qué estás buscando hoy?</h1>

    {{-- cards categories --}}
<div class="row m-5 p-5 justify-content-evenly">


    <div class="d-flex col-4 col-sm-6 mt-5 p-3 card-categories justify-content-center align-items-center">
        <a href="" class="nav-link">
        

            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-car-front icon-categories" viewBox="0 0 16 16">
                <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17 1.247 0 2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276Z"/>
                <path fill-rule="evenodd" d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.807.807 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155 1.806 0 4.037-.084 5.592-.155A1.479 1.479 0 0 0 15 9.611v-.413c0-.099-.01-.197-.03-.294l-.335-1.68a.807.807 0 0 0-.43-.563 1.807 1.807 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3H4.82Z"/>
                </svg>
                <div class="card-body">
                    <p class="card-text">Coches</p>
                </div>
            </a>
    </div>
    

      <div class="d-flex col-4 col-sm-6 mt-5 p-3 card-categories justify-content-center align-items-center">

        <a href="" class="nav-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bicycle icon-categories" viewBox="0 0 16 16">
            <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057 9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"/>
          </svg>
        <div class="card-body">
          <p class="card-text">Motos</p>
        </div>
        </a>
      </div>

      <div class="d-flex col-4 col-sm-6 mt-5  p-3 card-categories justify-content-center align-items-center">
        <a href="" class="nav-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house-door icon-categories" viewBox="0 0 16 16">
            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
          </svg>
        <div class="card-body">
          <p class="card-text">Hogar</p>
        </div>
        </a>
      </div>

      <div class="d-flex col-4 col-sm-6 mt-5  p-3 card-categories justify-content-center align-items-center">
        <a href="" class="nav-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-browser-chrome icon-categories" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
          </svg>
        <div class="card-body">
          <p class="card-text">Electronica</p>
        </div>
        </a>
      </div>

      <div class="d-flex col-4 col-sm-6 mt-5  p-3 card-categories justify-content-center align-items-center">
        <a href="" class="nav-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-phone-fill icon-categories" viewBox="0 0 16 16">
            <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
          </svg>
        <div class="card-body">
          <p class="card-text">Moviles</p>
        </div>
        </a>
      </div>

      <div class="d-flex col-4 col-sm-6 mt-5  p-3 card-categories justify-content-center align-items-center">
        <a href="" class="nav-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-laptop icon-categories" viewBox="0 0 16 16">
            <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
          </svg>

        <div class="card-body">
          <p class="card-text">Ordenadores</p>
        </div>
        </a>
    </div>
</div>


{{--  banner pro --}}
<div class="row  banner-pro justify-content-around align-items-center container-pro-banner">

    <div class="col-1 text-center text-white flex-grow-1 mt-5">
    
            <h2 class="title-banner-pro">A quien madruga Wallapop PRO le ayuda</h2>
   
            <p class="text-center text-white pro-banner-text p-5">¿Tienes un negocio y quieres empezar a vender online? Descubre nuestras soluciones para impulsar tus ventas. ¡Al lío!</p>
        
            <a href="" class="btn btn-pro-banner text-white">Más informacion</a>
    
    </div>

    <div class="col-5 banner-pro-img">
        <img src="./img/pro-banner.svg" alt="">
    </div>

</div>



<div class="row p-5 m-5">
  @forelse($ads as $ad)
  <div class="col-12 col-md-4">
      <div class="card mb-5">
          <img src="https://picsum.photos/20" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title"> {{$ad->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}}</h6>
              <p class="card-text"> {{$ad->body}}</p>
              <div class="card-subtitle mb-2">
                  <strong><a href="{{route('category.ads',$ad->category)}}">#{{$ad->category->name}}</a></strong>
                  <i>{{$ad->created_at->format('d/m/Y')}}</i>
              </div>
              <div class="card-subtitle mb-2">
                  <small>{{ $ad->user->name }}</small>
              </div> 
              <a href=" {{route("ads.show", $ad)}}" class="btn btn-primary">Mostrar Más</a>
          </div>
      </div>
  </div>
  @empty
  <div class="col-12">
        <h2>Uyy.. parece que no hay nada</h2>
        <a href="{{route('ads.create')}}" class="btn btn-success">Vende tu primer objeto</a> o <a href="{{route('home')}}" class="btn btn-primary">Vuelve a la home</a> 
    </div>
  @endforelse
</div>



  

</x-layout>