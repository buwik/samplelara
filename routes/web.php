<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('main', function () {
    return view('main');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('products', [ProductController::class, 'index'])->name('product.index');
Route::get('create', [ProductController::class, 'create'])->name('create.product');
Route::post('store', [ProductController::class, 'Store'])->name('product.store');

Route::get('edit/product/{id}', [ProductController::class, 'edit']);
Route::post('update/product/{id}', [ProductController::class, 'update']);
Route::get('delete/product/{id}', [ProductController::class, 'delete']);
Route::get('show/product/{id}', [ProductController::class, 'show']);


