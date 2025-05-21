@extends('layouts.app')

@section('title', 'Autocaio | Você de carro novo')

@section('content')
<header>
<div class="container">
                  
               </div>
   
 
</header>
<body>
  

    @if(session('mensagem'))
        <p style="color: green;">{{ session('mensagem') }}</p>
    @endif



<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">Cadastro de Carro</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Ops! Existem erros no formulário:</strong>
        <ul class="mb-0">
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


    <form action="{{ route('carros.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow-sm">
        @csrf

        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="ano" class="form-label">Ano</label>
                <input type="number" name="ano" id="ano" class="form-control" required>
            </div>

            <div class="col-md-6">
                <label for="preco" class="form-label">Preço</label>
                <input type="number" name="preco" id="preco" step="0.01" class="form-control" required>
            </div>

  

<div class="col-md-4">
    <label for="cor1" class="form-label">Cor principal (imagem)</label>
    <input type="file" name="cor1" id="cor1" class="form-control" accept="image/*" onchange="previewImage(this, '#preview-cor1')">
    <img id="preview-cor1" class="img-fluid mt-2 border rounded" style="max-height: 200px;">
</div>


         

            <div class="col-md-4">
    <label for="cor2" class="form-label">Cor Secundária (imagem)</label>
    <input type="file" name="cor2" id="cor2" class="form-control" accept="image/*" onchange="previewImage(this, '#preview-cor2')">
    <img id="preview-cor2" class="img-fluid mt-2 border rounded" style="max-height: 200px;">
</div>

         
<div class="col-md-4">
    <label for="cor3" class="form-label">Cor adicional (imagem)</label>
    <input type="file" name="cor3" id="cor3" class="form-control" accept="image/*" onchange="previewImage(this, '#preview-cor3')">
    <img id="preview-cor3" class="img-fluid mt-2 border rounded" style="max-height: 200px;">
</div>





        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
</div>


</body>

<script>
function previewImage(input, previewId) {
    const preview = document.querySelector(previewId);
    const file = input.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            preview.src = e.target.result;
        };

        reader.readAsDataURL(file);
    } else {
        preview.src = '';
    }
}
</script>





@endsection

@section('about')

@include('components.contato')
@include('components.footer')
@endsection
