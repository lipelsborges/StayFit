<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = collect([
            ['id' => 1,  'name' => 'Ana Silva',       'email' => 'ana.silva@email.com',   'cargo' => 'Dev Frontend',    'status' => 'Ativo',   'created_at' => '2024-01-10'],
            ['id' => 2,  'name' => 'Carlos Mendes',   'email' => 'carlos.m@email.com',    'cargo' => 'Dev Backend',     'status' => 'Ativo',   'created_at' => '2024-01-15'],
            ['id' => 3,  'name' => 'Fernanda Costa',  'email' => 'fernanda.c@email.com',  'cargo' => 'Designer',        'status' => 'Inativo', 'created_at' => '2024-02-03'],
            ['id' => 4,  'name' => 'Lucas Oliveira',  'email' => 'lucas.o@email.com',     'cargo' => 'DevOps',          'status' => 'Ativo',   'created_at' => '2024-02-18'],
            ['id' => 5,  'name' => 'Mariana Rocha',   'email' => 'mariana.r@email.com',   'cargo' => 'QA',              'status' => 'Ativo',   'created_at' => '2024-03-01'],
            ['id' => 6,  'name' => 'Rafael Souza',    'email' => 'rafael.s@email.com',    'cargo' => 'Dev Backend',     'status' => 'Inativo', 'created_at' => '2024-03-12'],
            ['id' => 7,  'name' => 'Juliana Lima',    'email' => 'juliana.l@email.com',   'cargo' => 'Product Manager', 'status' => 'Ativo',   'created_at' => '2024-04-05'],
            ['id' => 8,  'name' => 'Pedro Nunes',     'email' => 'pedro.n@email.com',     'cargo' => 'Dev Frontend',    'status' => 'Ativo',   'created_at' => '2024-04-20'],
            ['id' => 9,  'name' => 'Camila Ferreira', 'email' => 'camila.f@email.com',    'cargo' => 'Data Analyst',    'status' => 'Ativo',   'created_at' => '2024-05-08'],
            ['id' => 10, 'name' => 'Bruno Alves',     'email' => 'bruno.a@email.com',     'cargo' => 'Designer',        'status' => 'Inativo', 'created_at' => '2024-05-22'],
            ['id' => 11, 'name' => 'Letícia Gomes',   'email' => 'leticia.g@email.com',   'cargo' => 'QA',              'status' => 'Ativo',   'created_at' => '2024-06-01'],
            ['id' => 12, 'name' => 'Diego Santos',    'email' => 'diego.s@email.com',     'cargo' => 'DevOps',          'status' => 'Ativo',   'created_at' => '2024-06-14'],
        ]);

        return view('users.index', compact('users'));
    }
}
