<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class ServicosController extends Controller
{
    public function index()
    {
        return view('servicos.index');
    }

    public function store(Request $requisicao)
    {
        $Servico = new Servico();

        $Servico->Servico= $requisicao->servico;
        $Servico->Prestador = $requisicao->prestador;
        $Servico->Descricao = $requisicao->descricao;
        $Servico->Valor = $requisicao->valor;

        return view('Servicos.index', $Servico->id);
    }
}
