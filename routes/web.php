<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produtos')->middleware('auth');
Route::post('/produtos', [ProdutosController::class, 'index']);
Route::get('/produtos/add', [ProdutosController::class, 'add'])->name('produtos.add');
Route::post('/produtos/add', [ProdutosController::class, 'addSave'])->name('produtos.addSave');
Route::get('/produtos/{produto}', [ProdutosController::class, 'view'])->name('produtos.view');
Route::get('/produtos/edit/{produto}', [ProdutosController::class, 'edit'])->name('produtos.edit');
Route::post('/produtos/edit/{produto}', [ProdutosController::class, 'editSave'])->name('produtos.editSave');
Route::get('/produtos/delete/{produto}', [ProdutosController::class, 'delete'])->name('produtos.delete');
Route::delete('/produtos/delete/{produto}', [ProdutosController::class, 'deleteForReal'])->name('produtos.deleteForReal');

Route::prefix('/usuarios')->group(function () {
    Route::get('/cadastrar', [UsuarioController::class, 'index'])->name('usuarios.index');
    Route::post('/cadastrar', [UsuarioController::class, 'cadastrar'])->name('usuarios.cadastrar');
    Route::get('/usuarios', [UsuarioController::class, 'listAll'])->name('usuarios.listAll');
    Route::get('/login', [UsuarioController::class, 'login'])->name('login');
    Route::post('/login', [UsuarioController::class, 'login'])->name('login');
    Route::get('/logout', [UsuarioController::class, 'logout'])->name('logout');
})->middleware('auth');


Route::get('/email/verify', function(){
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function(EmailVerificationRequest $request){
    $request->fulfill();
    return redirect()->route('home');
})->middleware(['auth', 'signed'])->name('verification.verify');
