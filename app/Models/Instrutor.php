<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Instrutor extends Model
{
    protected $table = 'instrutores';

    protected $fillable = [
        'nome',
        'cpf',
        'status_id',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function treinos()
    {
        return $this->hasMany(TreinoAluno::class);
    }
}
