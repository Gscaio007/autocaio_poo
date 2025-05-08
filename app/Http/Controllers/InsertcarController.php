<?php

namespace App\Http\Controllers;

use App\Models\Modelos;
use Illuminate\Http\Request;

class InsertcarController extends Controller
{
    public function create()
    {
        return view('insertcar.create');
    }

    public function store(Request $request)
    {
        Modelos::create([
            'marca' => $request->input('marca'),
            'modelo' => $request->input('modelo'),
            'ano' => $request->input('ano'),
            'cor1' => $request->input('cor1'),
            'cor2' => $request->input('cor2'),
            'cor3' => $request->input('cor3'),
            'preco' => $request->input('preco'),
          
        ]);

        return redirect()->back()->with('mensagem', 'Carro cadastrado com sucesso!');
    }
}