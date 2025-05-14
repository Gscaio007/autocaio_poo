@extends('layouts.app')

@section('title', 'Autocaio | Você de carro novo')

@section('content')
<header>
<div class="container">
                  
               </div>
   
 
</header>

  <ul>  

<form method="GET" action="{{ route('catalogo') }}" class="row g-3 mb-4 bg-light p-3 rounded shadow-sm">

    <div class="col-md-3">
        <label for="ano" class="form-label">Ano mínimo</label>
        <input type="number" name="ano" id="ano" class="form-control" value="{{ request('ano') }}">
    </div>

    <div class="col-md-3">
        <label for="preco_max" class="form-label">Preço máximo</label>
        <input type="number" name="preco_max" id="preco_max" class="form-control" value="{{ request('preco_max') }}">
    </div>

    <div class="col-md-3">
        <label for="marca" class="form-label">Marca</label>
        <select name="marca" id="marca" class="form-select">
            <option value="">Todas</option>
            @foreach($todasMarcas as $marca)
                <option value="{{ $marca }}" @selected(request('marca') == $marca)>{{ $marca }}</option>
            @endforeach
        </select>
    </div>

    <div class="col-md-3 d-flex align-items-end">
        <button type="submit" class="btn btn-primary w-100">Filtrar</button>
    </div>

</form>




    @foreach ($modelos as $modelo)
    


        <div class="card" style="width: 18rem;">
          <img src="{{ asset('assets/img/carros/' . $modelo->marca . '/' . $modelo->modelo . '/' . $modelo->cor1) }}" class="card-img-top" alt="...">
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