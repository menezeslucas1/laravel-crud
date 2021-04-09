<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function login(Request $request){
        $nome = $request->nome;
        $email = $request->email;
        
        $usuario = Usuario::find($email, $senha);
        return view('produtos.show', ['usuario' => $usuario]);
    }
}
