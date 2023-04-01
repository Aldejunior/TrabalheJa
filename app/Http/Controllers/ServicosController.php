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
}
