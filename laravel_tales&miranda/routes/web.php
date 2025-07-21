<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerRate;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::get('/livro', [controllerRate::class, 'index'])->name('indexlivro');
Route::get('/livro/novo', [controllerRate::class, 'create'])->name('novoLivro');
Route::post('/livro', [controllerRate::class, 'store'])->name('gravarNovoLivro');
Route::get('/livro/apagar/{id}', [controllerRate::class, 'destroy'])->name('deletaLivro');
Route::get('/livro/editar/{id}', [controllerRate::class, 'edit'])->name('editaLivro');
Route::post('/livro/{id}', [controllerRate::class, 'update'])->name('atualizaLivro');
Route::get('/livro/pesquisa', [controllerRate::class, 'pesquisarLivro'])->name('pesquisarLivro');
Route::get('/livro/procura', [controllerRate::class, 'procurarLivro'])->name('procurarLivro');
