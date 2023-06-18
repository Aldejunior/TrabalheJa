<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Models\Prestador;
use App\Models\Servico;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    public function index ()
    {
        $administradores = Administrador::all();
        return view('administradores.index', compact('administradores'));
    }

    public function show(administrador $administrador)
    {
        return view('administradores.show', compact('administrador'));
    }

    public function create()
    {
        return view('administradores.create');
    }

    public function editar(Administrador $administrador)
    {
        return view('administradores.editar', compact('administrador'));
    }

    public function store(Request $requisicao)
    {
        $requisicao->validate([
            'nome' => 'required',
            'email' => 'required',
            'senha' => 'required|confirmed'
        ]);

        $administrador = new Administrador();

        $administrador->nome = $requisicao->nome;
        $administrador->email = $requisicao->email;
        $administrador->senha = Hash::make($requisicao->senha);

        $administrador->save();

        return redirect()->route('administradores.index');
    }


    public function update(Administrador $administrador, Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
        ]);

        $administrador->nome = $request->nome;
        $administrador->email = $request->email;

        $administrador->save();

        return redirect()->route('administradores.show', $administrador->id);
    }

    public function destroy(Administrador $administrador)
    {
        $administrador->delete();
        return redirect()->route('administradores.index');
    }
    public function prestador(prestador $prestador)
    {
        $prestador->load('servicos');

        return view('administradores.prestador', compact('prestador'));
    }
}
