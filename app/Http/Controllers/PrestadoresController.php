<?php

namespace App\Http\Controllers;

use App\Models\Prestador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PrestadoresController extends Controller
{
    public function index()
    {
        $prestadores = Prestador::all();
        return view('prestadores.index', compact('prestadores'));
    }

    public function show(prestador $prestador)
    {
        return view('prestadores.show', compact('prestador'));
    }

    public function create()
    {
        return view('prestadores.create');
    }

    public function editar(Prestador $prestador)
    {
        return view('prestadores.editar', compact('prestador'));
    }


    public function store(Request $requisicao)
    {
        $requisicao->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required|confirmed',
            'cpf_cnpj' => 'required',
            'telefone' => 'required',
        ]);

        $prestador = new Prestador();

        $prestador->nome = $requisicao->nome;
        $prestador->email = $requisicao->email;
        $prestador->senha = Hash::make($requisicao->senha);
        $prestador->cpf_cnpj = $requisicao->cpf_cnpj;
        $prestador->telefone = $requisicao->telefone;

        $prestador->save();

        return redirect()->route('prestadores.index');
    }

    public function update(Prestador $prestador, Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'cpf_cnpj' => 'required',
            'telefone' => 'required',
        ]);

        $prestador->nome = $request->nome;
        $prestador->email = $request->email;
        $prestador->cpf_cnpj = $request->cpf_cnpj;
        $prestador->telefone = $request->telefone;

        $prestador->save();

        return redirect()->route('prestadores.show', $prestador->id);
    }

    public function destroy(Prestador $prestador)
    {
        $prestador->delete();
        return redirect()->route('prestadores.index');
    }

    public function StorePrestadorServico(Request $requisicao)
    {
        $requisicao->validate([
            'servico_id' => 'required',

            'valor' => 'required',
            'cidade' => 'required|confirmed',
            'cpf_cnpj' => 'required',
            'telefone' => 'required',
        ]);

        $prestador = new Prestador();

        $prestador->valor = $requisicao->valor;
        $prestador->cidade =$requisicao->cidade;
        $prestador->cpf_cnpj = $requisicao->cpf_cnpj;
        $prestador->telefone = $requisicao->telefone;

        $prestador->save();

        return redirect()->route('prestadores.index');
    }

}
