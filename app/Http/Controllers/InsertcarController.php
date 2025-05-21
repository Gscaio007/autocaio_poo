<?php

namespace App\Http\Controllers;

use App\Models\Modelos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InsertcarController extends Controller
{
    public function create()
    {
        return view('insertcar.create');
    }

 
public function store(Request $request)
{
    // Validação dos dados
    $validated = $request->validate([
        'marca' => 'required|string|max:255',
        'modelo' => 'required|string|max:255',
        'ano' => 'required|integer|min:1900|max:' . now()->year,
        'preco' => 'required|numeric|min:0',
        'cor1' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'cor2' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'cor3' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Upload das imagens (se existirem)
    $cor1Path = $request->file('cor1')?->store('public/carros');
    $cor2Path = $request->file('cor2')?->store('public/carros');
    $cor3Path = $request->file('cor3')?->store('public/carros');

    // Criação no banco
    $modelo = new Modelos();
    $modelo->marca = $validated['marca'];
    $modelo->modelo = $validated['modelo'];
    $modelo->ano = $validated['ano'];
    $modelo->preco = $validated['preco'];
    $modelo->cor1 = $cor1Path ? str_replace('public/', 'storage/', $cor1Path) : null;
    $modelo->cor2 = $cor2Path ? str_replace('public/', 'storage/', $cor2Path) : null;
    $modelo->cor3 = $cor3Path ? str_replace('public/', 'storage/', $cor3Path) : null;
    $modelo->save();

    return redirect()->route('catalogo')->with('success', 'Carro cadastrado com sucesso!');
}




    
}