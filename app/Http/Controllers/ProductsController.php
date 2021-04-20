<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;

class ProductsController extends Controller
{
    public function index(){
        $products = Produto::orderby('nome','asc')->paginate();
        return view('product.product-index', ['products' => $products]);
    }

    public function create(){
        return view('product.product-create');
    }

    public function insert(Request $request){
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->valor = $request->valor;
        $produto->descricao = $request->descricao;
        $produto->save();
        return redirect()->route('products');
    }

    public function show($id){
        $product = Produto::find($id);
        return view('product.product-show', ['product' => $product]);
    }

    public function edit(Produto $product){
        return view('product.product-edit', ['product' => $product]);
    }

    public function update(Request $request, Produto $product){
        $product->nome = $request->nome;
        $product->valor = $request->valor;
        $product->descricao = $request->descricao;
        $product->save();
        return redirect()->route('products');
    }

    public function delete(Produto $produto){
        $produto->delete();
        return redirect()->route('products');
    }

    public function confirmDelete(Produto $product){
        return view('product.product-delete', ['product' => $product]);
    }
}
