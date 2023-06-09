<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ServicosController extends Controller
{
    public function index()
    {
        $servicos = Servico::all();
        return view('servicos.index', compact('servicos'));
    }

    public function show(Servico $servico)
    {
        $servico->load('prestadores');

        return view('servicos.show', compact('servico'));
    }

    public function create()
    {
        return view('servicos.create');
    }

    public function editar(servico $servico)
    {
        return view('servicos.editar', compact('servico'));
    }

    public function store(Request $requisicao)
    {
        $requisicao->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'imagem' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        $servico = new servico();

        $servico->titulo = $requisicao->titulo;
        $servico->descricao = $requisicao->descricao;
        $servico->imagem = '';

        if($requisicao->hasFile('imagem')){
            $imagem = $requisicao->file('imagem')->store('servicos', ['disk' => 'public']);
            $servico->imagem = $imagem;
        }

        $servico->save();

        return redirect()->route('servicos.index');
    }

    public function update(servico $servico, Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
        ]);

        $servico->titulo = $request->titulo;
        $servico->descricao = $request->descricao;

        if($request->hasFile('imagem')){
            $imagem = $request->file('imagem')->store('servicos', ['disk' => 'public']);
            $servico->imagem = $imagem;
        }

        $servico->save();

        return redirect()->route('servicos.show', $servico->id);
    }

    public function destroy(servico $servico)
    {
        $servico->delete();
        return redirect()->route('servicos.index');
    }

}
