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
        $modelos = Modelos::all();
        return view('carros.catalogo', compact('modelos'));
    }

    public function aluguel(): View
    {
        return view('carros.aluguel');
    }



}



