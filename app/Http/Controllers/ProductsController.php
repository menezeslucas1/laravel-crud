<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

/**
 * Controller for the products database table
 * 
 * Responsable for all crud operations in the database.
 * Responsable for all operations related to the /products/ pages.
 */
class ProductsController extends Controller
{
    /**
     * Show a list of all products, ordered by the name.
     * Products are seperated by pages.
     */
    public function index(){
        $products = Product::orderby('name','asc')->paginate();
        return view('products.products-index', ['products' => $products]);
    }

    /**
     * Show the form to add a new product to the list.
     */
    public function getNew(){
        return view('products.products-new');
    }

    /**
     * Add the new product to the database.
     * Redirect to the index page.
     * 
     * @param Request $request the new product's attributes
     */
    public function postNew(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('products.get.index');
    }

    /**
     * Show all the data of a single product
     * 
     * @param int $id the id (primary key) of the selected product
     */
    public function view($id){
        $product = Product::find($id);
        return view('products.products-view', ['product' => $product]);
    }

    /**
     * Show the form to edit a selected product
     * 
     * @param Product $product the selected product to edit
     */
    public function getEdit(Product $product){
        return view('products.products-edit', ['product' => $product]);
    }

    /**
     * Edit the selecteed product in the database.
     * Redirect to the index page.
     * 
     * @param Request $request the product's new data
     * @param Product $product the product to be modified
     */
    public function putEdit(Request $request, Product $product){
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->save();
        return redirect()->route('products.get.index');
    }

    /**
     * Ask a comfirmation to delete a product
     * 
     * @param Product $product the product to delete
     */
    public function getDelete(Product $product){
        return view('products.products-delete', ['product' => $product]);
    }

    /**
     * Remove a product from the database.
     * Redirect to the index page.
     * 
     * @param Request $request metadata about the request
     * @param Product $product product to be removed from database
     */
    public function deleteDelete(Request $request, Product $product){
        $product->delete();
        return redirect()->route('products.get.index');
    }
}
