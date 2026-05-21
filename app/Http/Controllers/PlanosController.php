<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlanosController extends Controller
{
    function index() {
        return view('planos.index');
    }

    function cadastrar() {
        return view('planos.cadastrar');
    }

    function editar() {
        return view('planos.editar');
    }
}
