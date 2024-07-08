<?php

use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

    Route::get('/', [productController::class, 'index'])->name('product.index');
    Route::get('/product/home', [ProductController::class, 'home'])->name('product.home');
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/product/login', [ProductController::class, 'login'])->name('product.login');
    Route::get('/product/catagories',[productController::class,'catagories'])->name('product.catagories');
    Route::get('/products/history',[productController::class,'history'])->name('product.history');
    Route::get('/product/edit', [ProductController::class, 'edit']);
    Route::get('/product/update', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/destroy',[productController::class, 'destroy'])->name('product.destroy');
    Route::get('/product/show', [ProductController::class, 'show'])->name('product.show');
   Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

