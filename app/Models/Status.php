<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = 'status';

    protected $fillable = [
        'nome',
    ];

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }

    public function usuarios()
    {
        return $this->hasMany(Usuario::class);
    }

    public function instrutores()
    {
        return $this->hasMany(Instrutor::class);
    }

    public function mensalidades()
    {
        return $this->hasMany(Mensalidade::class);
    }
}
