
<x-layout>
    <x-slot name='title'>Rapido -  {{$category->name}} ads</x-slot>
    <h1 class=""><span class="title-underline">{{$category->name}} </span>de segunda mano</h1>

    <div class="row">
        <div class="col-10 flex-grow-1">
            <form class="d-flex " role="search">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search search-icon" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
                <input class="form-control me-2 search-navbar w-75" type="search" placeholder="Buscar en Todas las categorias" aria-label="Search">
              </form>
        
        </div>
        <div class="col-2">
            <a href="" class="btn">Prufondizar Buscada</a>
        </div>
    </div>
    


<div class="row p-5 m-5 justify-content-center">
  @forelse($ads as $ad)
  <div class="col-12 col-md-4">
      <div class="card mb-5">
          <img src="https://picsum.photos/20" class="card-img-top" alt="...">
          <div class="card-body">
              <h5 class="card-title"> {{$ad->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}}</h6>
              <p class="card-text"> {{$ad->body}}</p>
              <div class="card-subtitle mb-2">
                  <strong><a href="{{route('category.ads',$ad->category)}}">#{{$category->name}}</a></strong>
                  <i>{{$ad->created_at->format('d/m/Y')}}</i>
              </div>
              <div class="card-subtitle mb-2">
                  <small>{{ $ad->user->name }}</small>
              </div> 
              <a href="{{ route("ads.show", $ad)}}" class="btn btn-primary">Mostrar Más</a>
          </div>
      </div>
  </div>
  @empty
  <div class="col-12">
        <h2>Uyy.. parece que no hay nada de esta categoría</h2>
        <a href="{{route('ads.create')}}" class="btn btn-success">Vende tu primer objeto</a> o <a href="{{route('home')}}" class="btn btn-primary">Vuelve a la home</a> 
    </div>
  @endforelse
</div>
<div class="paginate" id="page">
    {{$ads->links()}}
</div>






  

</x-layout>