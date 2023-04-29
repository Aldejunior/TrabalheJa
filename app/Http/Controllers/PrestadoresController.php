<?php

namespace App\Http\Controllers;

use App\Models\Prestador;
use Illuminate\Http\Request;

class PrestadoresController extends Controller
{
    public function index()
    {
        return view('prestadores.index');
    }

    public function home()
    {
        return view('prestadores.home');
    }


    public function create()
    {
        return view('prestadores.create');
    }


    public function store(Request $requisicao)
    {
        $Prestador = new Prestador();

        $Prestador->nome = $requisicao->nome;
        $Prestador->email = $requisicao->email;
        $Prestador->senha = $requisicao->senha;
        $Prestador->cpf_cnpj = $requisicao->cpf_cnpj;
        $Prestador->telefone = $requisicao->telefone;

        $Prestador->save();

        return view('prestadores.index', $Prestador->id);
    }

    public function login(Prestador $Prestador)
    {
        return view('prestadores.login');
    }

}
