<?php

namespace App\Http\Controllers;

use App\Models\Prestador;
use App\Models\Servico;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index (servico $servico)
    {
        $prestadores = prestador::all();
        return view('contatos.index', compact('prestador', 'servico'));
    }

    public function show (prestador $prestador)
    {
        $prestadores = prestador::all();
        return view('contatos.show', compact('prestador', 'servico'));
    }

}
