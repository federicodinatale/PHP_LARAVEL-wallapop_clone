
<x-layout>
    <x-slot name='title'>Rapido -  {{$category->name}} ads</x-slot>
    <p class="text-center title-secondary">Rapido, la plataforma líder de compraventa de productos de segunda mano</p>
    <h1 class="text-center mt-2">Anuncio por categoria: {{$category->name}}</h1>



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

{{-- <div class="paginate" id="page">
    {{$ads->links()}}
</div> --}}

{{$ads->links()}}





  

</x-layout>