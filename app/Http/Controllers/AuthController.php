<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {

        $login = $request->validate([
            'name' => ['required'],
            'password' => ['required']
        ]);

        if (Auth::attempt($login)) { //tente de connecter le user
            $request->session()->regenerate();

            return redirect()->intended(route('homeAdmin')); //rediriger automatiquement à l'endroit à laquel le user voulais accéder (ex: user veut aller sur la page back office, besoin de se connecter. Il tombe sur le formulaire de connexion, il se connecte et revient automatiquement sur le back office)
        }

        return back()->withErrors([ // méthode back() = faire une redirection vers la précedente page ou on été si le les id sont eronés
            'email' => 'Identifiants erronés.'
        ])->onlyInput('email'); // sert à remettre l'email dans le formulaire pour le user (il aura simplement à remettre le MDP)  || withInput() sert à tous garder email et MDP

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
