@extends('layouts.app')

@section('title', 'Autocaio | Você de carro novo')

@section('content')
<header>
<div class="container">
                  
               </div>
   
 
</header>

  <ul>  
    @foreach ($modelos as $modelo)
    
        <div class="card" style="width: 18rem;">
          <img src="{{ asset('assets/img/carros/chevy/cruze/cruzecinza.png') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $modelo->marca }}  {{ $modelo->modelo }}</h5>
            <p class="card-text"></p>
            <a href="#" class="btn btn-primary">Selecionar</a>
          </div>
        </div>

    @endforeach
  </ul>


@endsection

@section('about')

@include('components.contato')
@include('components.footer')
@endsection