<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class );

Route::get('produtos/inserir', [ProdutosController::class, 'create'])->name('produtos.inserir');

Route::get('produtos/{id}', [ProdutosController::class, 'show'])->name('produtos.descricao');
//Route::get('produtos/{nome}/{valor?}', [ProdutosController::class, 'show'])->name('produtos.descricao');

Route::get('produtos', [ProdutosController::class, 'index'])->name('produtos');

Route::post('produtos', [ProdutosController::class, 'insert'])->name('produtos.insert');

Route::get('produtos/{produto}/edit', [ProdutosController::class, 'edit'])->name('produtos.edit');

Route::put('produtos/{produto}', [ProdutosController::class, 'editar'])->name('produtos.editar');

Route::delete('produtos/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');

Route::get('produtos/{produto}/delete', [ProdutosController::class, 'modal_delete'])->name('produtos.modal_delete');
