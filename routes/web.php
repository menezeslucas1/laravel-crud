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

Route::get('products', [ProductsController::class, 'index'])->name('products');

Route::get('products/new', [ProductsController::class, 'getNew'])->name('products.get.new');

Route::post('products', [ProductsController::class, 'postNew'])->name('products.post.new');

Route::get('products/{id}', [ProductsController::class, 'view'])->name('products.get.view');

Route::get('products/{product}/edit', [ProductsController::class, 'getEdit'])->name('products.get.edit');

Route::put('products/{product}', [ProductsController::class, 'putEdit'])->name('products.put.edit');

Route::get('products/{product}/delete', [ProductsController::class, 'getDelete'])->name('products.get.delete');

Route::delete('products/{product}/delete', [ProductsController::class, 'postDelete'])->name('products.post.delete');

Route::get('usuarios/', [UsuariosController::class, 'login'])->name('usuarios.login');

Route::get('usuarios/logout', [UsuariosController::class, 'logout'])->name('usuarios.logout');
