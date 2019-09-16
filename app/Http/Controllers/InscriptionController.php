<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class InscriptionController extends Controller
{
    public function formulaire()
    {
    	return view('pages.inscription');
    }
    public function traitement()
    {/*
    	\Validator::make(request('email'), ['required', 'email'])->validate();
        \Validator::make(request('password'), ['required', 'confirmed', 'min:8'])->validate();
    	\Validator::make(request('password_confirmation'), ['required'])->validate();*/
         request()->validate([
             'email' => ['required', 'email'],
             'password' => ['required', 'confirmed', 'min:8'],
             'password_confirmation' => ['required'],
         ], [
             'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères.'
         ]);

        // $utilisateur = User::create([
        //     'email' => request('email'),
        //     'mot_de_passe' => bcrypt(request('password')),
        // ]);

        return "Nous avons reçu votre email qui est " . request('email') . ' et votre mot de passe est ' . request('password');
    }
}
