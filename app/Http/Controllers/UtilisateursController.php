<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UtilisateursController extends Controller
{
    public function liste(){
    	$utilisateurs = App\User::all();
    	return view('utilisateurs', ['utilisateurs' => $utilisateurs, ]);
    }
}
