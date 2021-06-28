<?php

use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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


Route::prefix('product')->group(function () {
    Route::get('/',[ProductController::class, 'index'])->name('product.index');
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('/edit/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::post('/create', [ProductController::class, 'store'])->name('product.store');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('/search/{name}', [ProductController::class, 'searchName'])->name('product.search-name');
    Route::get('/custom-validation', [ProductController::class, 'checkValidation'])->name('product.form-submit');
    Route::get('/t', [ProductController::class, 't'])->name('product.t');
    Route::get('/t2', [ProductController::class, 't2'])->name('product.t2');


});

