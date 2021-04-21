<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::orderby('name','asc')->paginate();
        return view('products.products-index', ['products' => $products]);
    }

    public function getNew(){
        return view('products.products-new');
    }

    public function postNew(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('products');
    }

    public function view($id){
        $product = Product::find($id);
        return view('products.products-view', ['product' => $product]);
    }

    public function getEdit(Product $product){
        return view('products.products-edit', ['product' => $product]);
    }

    public function putEdit(Request $request, Product $product){
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('products');
    }

    public function getDelete(Product $product){
        return view('products.products-delete', ['product' => $product]);
    }

    public function postDelete(Request $request, Product $product){
        $product->delete();
        return redirect()->route('products');
    }
}
