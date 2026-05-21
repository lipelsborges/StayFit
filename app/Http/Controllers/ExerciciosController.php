<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function index() {
        return view('exercicios.index');
    }

    public function cadastrar() {
        return view('exercicios.cadastrar');
    }

    public function editar() {
        return view('exercicios.editar');
    }
}
