<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;
class ProdutosController extends Controller
{
    public function index(){
        $produtos = produto::orderby('nome','asc')->paginate();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function insert(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;
        $produto->save();
        return redirect()->route('produtos');
//        return $request;
    }

    public function show($id){
        $produto = Produto::find($id);
        return view('produtos.show', ['produto' => $produto]);
    }

    public function edit(Produto $produto){
//        $produto = Produto::find($id);
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function editar(Request $request, Produto $produto){
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;
        $produto->save();
        return redirect()->route('produtos');
    }

    public function delete(Produto $produto){
        return "teste";
    }
}
