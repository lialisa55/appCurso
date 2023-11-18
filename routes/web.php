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

//Rota busca nome Categoria
Route::get('/nomecategoria}', [CategoriaController::class, 'buscarCategoriaNome'])->name('buscarcategoria');




//Rota para alterar Categoria
Route::get('/putcategoria/{registroscategoria}', [CategoriaController::class,'MostrarAlterarCategoria'])->name('alterar-categoria');
Route::put('/alterarcategoria/{registroscategoria}',[CategoriaController::class, 'putCategoria'])->name('alterar-banco-categoria');

//Rota para alterar Curso
Route::get('putcurso/{registroscurso}', [CursoController::class,'MostrarAlterarCurso'])->name('alterar-curso');
Route::put('/alterarcurso/{registroscurso}', [CursoController::class,'putCurso'])->name('alterar-banco-curso');

//Rota para alterar Aula
Route::get('/putaula/{registrosaula}', [AulaController::class,'MostrarAlterarAula'])->name('alterar-aula');
Route::put('/alteraraula/{registrosaula}', [AulaController::class,'putAula'])->name('alterar-banco-aula');


Route::delete('/delcategoria/{registroscategoria}',[CategoriaController::class, 'deletarCategoria'])->name('deletar-categoria');

Route::get('/cadcurso', [CursoController::class, 'showFormCurso'])->name('showCurso');
Route::post('/cadcurso', [CursoController::class, 'cadastroCurso'])->name('sendCurso');
Route::get('/gercurso', [CursoController::class, 'showManipulaCurso'])->name('genCurso');
Route::delete('/delcurso/{registroscurso}', [CursoController::class, 'deletarCurso'])->name('deletar-curso');

Route::get('/cadaula', [AulaController::class, 'showFormAula'])->name('showAula');
Route::post('/cadaula', [AulaController::class, 'cadastroAula'])->name('sendAula');
Route::get('/geraula', [AulaController::class, 'showManipulaAula'])->name('genAula');
Route::delete('/delaula/{registrosaula}', [AulaController::class, 'deletarAula'])->name('deletarAula');
