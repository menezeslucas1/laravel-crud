<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
class UsuariosController extends Controller
{
    public function login(Request $request){
        $nome = $request->username;
        $senha = $request->password;
        $usuario = usuario::where('nome', '=', $nome)->where('senha', $senha)->first();
        
        if($usuario != null){
            @session_start();
            $_SESSION['id_usuario'] = $usuario->id;
            $_SESSION['nome_usuario'] = $usuario->nome;
            $_SESSION['email_usuario'] = $usuario->email;
            $_SESSION['nivel_usuario'] = $usuario->nivel;
            return redirect()->route('produtos');
        }
        else{
            echo "<script language='javascript'> window.alert('Dados Incorretos!') </script>";
            return redirect()->route('home');
        }
    }

    public function logout (){
        @session_start();
        @session_destroy();
        return redirect()->route('home');
    }
}
