<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsuariosController;
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

Route::get('/', HomeController::class )->name('home');

Route::get('produtos/inserir', [ProductsController::class, 'create'])->name('products.new');

Route::get('produtos/{id}', [ProductsController::class, 'show'])->name('products.show');

Route::get('produtos', [ProductsController::class, 'index'])->name('products');

Route::post('produtos', [ProductsController::class, 'insert'])->name('products.insert');

Route::get('produtos/{product}/edit', [ProductsController::class, 'edit'])->name('products.edit');

Route::put('produtos/{product}', [ProductsController::class, 'update'])->name('products.update');

Route::delete('produtos/{product}/delete', [ProductsController::class, 'delete'])->name('products.delete');

Route::get('produtos/{product}/delete', [ProductsController::class, 'confirmDelete'])->name('products.confirmDelete');

Route::get('usuarios/', [UsuariosController::class, 'login'])->name('usuarios.login');

Route::get('usuarios/logout', [UsuariosController::class, 'logout'])->name('usuarios.logout');
