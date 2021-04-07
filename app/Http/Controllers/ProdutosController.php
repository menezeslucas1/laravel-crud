<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;
class ProdutosController extends Controller
{
    public function index(){
        $produtos = produto::paginate();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function show($id){
        return view('produtos.show', ['id' => $id]);
    }
        /*
        return view('produtos.show', ['nome' => $nome, 'valor' => $valor]);    
        if ($valor){
            return "O nome do produto é $nome, e o valor é $valor.";
        }
        else{
            return "O nome do produto é $nome.";
        }
    }
    */
    }
