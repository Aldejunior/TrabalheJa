<?php

namespace App\Http\Controllers;
use App\Models\Servico;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {

        $servicos = Servico::all();

        return view('site.home' , compact('servicos'));

    }

    public function login()
    {
        return view('site.login');
    }
}
