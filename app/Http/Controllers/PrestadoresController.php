<?php

namespace App\Http\Controllers;

use App\Models\Prestador;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $servicos = Servico::all();
        return view('prestadores.show', compact('prestador', 'servicos'));
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
            'servico_id' => 'required|exists:servicos,id',
            'valor' => 'required',
            'cidade' => 'required',
            'cep' => 'required',
            'estado' => 'required',
        ]);

        $prestador = Prestador::find(1);

        $prestador->servicos()->attach($requisicao->servico_id, [
            'valor' => $requisicao->valor,
            'cidade' => $requisicao->cidade,
            'cep' => $requisicao->cep,
            'estado' => $requisicao->estado
        ]);

        return redirect()->route('prestadores.show', $prestador->id);
    }

}
