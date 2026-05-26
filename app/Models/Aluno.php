<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    public $timestamps = false;

    protected $fillable = [
        'nome',
        'datanasc',
        'cpf',
        'telefone',
        'datanasc',
        'plano_id',
        'status_id',
    ];

    public function plano()
    {
        return $this->belongsTo(Plano::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }

    public function checkins()
    {
        return $this->hasMany(Checkin::class);
    }

    public function consumos()
    {
        return $this->hasMany(Consumo::class);
    }

    public function mensalidades()
    {
        return $this->hasMany(Mensalidade::class, 'id_aluno');
    }

    public function treinos()
    {
        return $this->hasMany(TreinoAluno::class);
    }
}
