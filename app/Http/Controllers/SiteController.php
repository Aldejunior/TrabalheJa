<?php

namespace App\Http\Controllers;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store_login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required|min:6',
            'guarda' => 'required|in:adm,pre'
        ]);

        if (Auth::guard($request->guard)->attempt(['email' => $request->email, 'password' => $request->senha])) {
            $request->session()->regenerate();

            return redirect()->intended('administradores');
        }

        return back()->withErrors([
            'email' => 'As credenciais fornecidas não correspondem aos nossos registros.',
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('site.login');
    }
}
