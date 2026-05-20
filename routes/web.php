<?php

use App\Http\Controllers\SiteController;
use App\Http\Controllers\AlunosController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\ExerciciosController;
use Illuminate\Support\Facades\Route;

//layout
Route::get('/', [SiteController::class, 'layout'])->name('index_page');

// Rota para a página de alunos
Route::get('/aluno', [SiteController::class, 'aluno'])->name('alunos.index');
Route::get('/aluno/cadastrar', [AlunosController::class, 'cadastrarAluno'])->name('alunos.cadastrar');
Route::get('/aluno/editar', [AlunosController::class, 'editarAluno'])->name('alunos.editar');


//Avaliação
Route::get('/avaliacao', [AvaliacaoController::class, 'index'])->name('avaliacao.index');


//Exercicios
Route::get('/exercicios', [ExerciciosController::class, 'index'])->name('exercicios.index');