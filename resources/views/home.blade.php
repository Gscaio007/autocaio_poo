@extends('layouts.app')

@section('title', 'Autocaio | Você de carro novo')

@section('content')
<header>
<div class="container">
                  
               </div>
    
               <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
         <img src="{{ url('assets/img/header-bg.jpg') }}" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="{{ url('assets/img/header-bg2.jpg') }}" class="d-block w-100" alt="...">
       </div>
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Próximo</span>
  </button>
</div>

  
   
   
   
   
 
</header>

@include('components.portfoliogrid')
@endsection

@section('about')
@include('components.about')
@include('components.contato')
@include('components.footer')
@endsection