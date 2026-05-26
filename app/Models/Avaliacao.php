<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacao';

    protected $fillable = [
        'aluno_id',
        'altura',
        'peso',
        'percgordura',
        'fuma_bebe',
        'problema_saude',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }
}
