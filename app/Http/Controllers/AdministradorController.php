<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use Illuminate\Support\Facades\Hash;

class AdministradorController extends Controller
{
    public function index ()
    {
        $administradores = Administrador::all();
        return view('administradores.index', compact('administradores'));
    }

    public function show(Administrador $Administrador)
    {
        return view('administradores.show', compact('Administrador'));
    }
}
