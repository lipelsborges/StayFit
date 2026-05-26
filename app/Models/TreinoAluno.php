<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TreinoAluno extends Model
{
    protected $table = 'treino_aluno';

    protected $fillable = [
        'instrutor_id',
        'aluno_id',
        'exercicio_id',
        'repeticao',
        'descanso',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function instrutor()
    {
        return $this->belongsTo(Instrutor::class);
    }

    public function exercicio()
    {
        return $this->belongsTo(Exercicio::class);
    }
}
