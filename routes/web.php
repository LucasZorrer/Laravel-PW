<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos');
Route::get('/produtos/add', [ProdutosController::class, 'add'])->name('produtos.add');
Route::post('/produtos/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');
Route::get('/produtos/{produto}', [ProdutosController::class, 'view'])->name('produtos.view');
Route::get('/produtos/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit');
Route::post('/produtos/edit/{produto}', [ProdutosController::class, 'editSave'])->name('produtos.editSave');
Route::get('/produtos/delete/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');
Route::delete('/produtos/delete/{produto}', [ProdutosController::class, 'deleteForReal'])->name('produtos.deleteForReal');
