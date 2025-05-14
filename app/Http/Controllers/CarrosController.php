<?php

namespace App\Http\Controllers;

use App\Models\Modelos;
use Illuminate\View\View;

class CarrosController extends Controller
{
    /**
     * Exibe a lista de modelos de carros.
     */
  public function catalogo(): View
{
    $query = Modelos::query();

    if (request('ano')) {
        $query->where('ano', '>=', request('ano'));
    }

    if (request('preco_max')) {
        $query->where('preco', '<=', request('preco_max'));
    }

    if (request('marca')) {
        $query->where('marca', request('marca'));
    }

    $modelos = $query->get();

    // Pega marcas distintas para preencher o select
    $todasMarcas = Modelos::select('marca')->distinct()->pluck('marca');

    return view('carros.catalogo', compact('modelos', 'todasMarcas'));
}







    public function aluguel(): View
    {
        return view('carros.aluguel');
    }














}



