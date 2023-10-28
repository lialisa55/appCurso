<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AulaController;

Route::get('/',[CategoriaController::class,'index'])->name('index');

Route::get('/cadcategoria',[CategoriaController::class,'mostrarFormCat'])->name("cadcategoria");
Route::post('/cadcategoria',[CategoriaController::class, 'cadastroCat'])->name('cadastro-categoria');

Route::get('/altcategoria',[CategoriaController::class, 'showManipulationCat'])->name('manipulador-categoria');

Route::get('/gercategoria',[CategoriaController::class, 'showManipulationCategory'])->name('manipulador-categoria');
Route::put('/putcategoria/{registroscategoria}',[CategoriaController::class, 'putCategoria,'])->name('put-categoria');
Route::delete('/delcategoria/{registroscategoria}',[CategoriaController::class, 'deletarCategoria'])->name('deletar-categoria');

Route::get('/cadcurso', [CursoController::class, 'showFormCurso'])->name('showCurso');
Route::post('/cadcurso', [CursoController::class, 'cadastroCurso'])->name('sendCurso');
Route::get('/gencurso', [CursoController::class, 'showManipulaCurso'])->name('genCurso');

Route::get('/cadaula', [AulaController::class, 'showFormAula'])->name('showAula');
Route::post('/cadaula', [AulaController::class, 'cadastroAula'])->name('sendAula');
Route::get('/genaula', [AulaController::class, 'showManipulaAula'])->name('genAula');

