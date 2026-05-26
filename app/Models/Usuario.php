<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $fillable = [
        'nome',
        'usuario',
        'senha',
        'cpf',
        'status_id',
        'tipo_id',
    ];

    protected $hidden = [
        'senha',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function tipo()
    {
        return $this->belongsTo(TipoUsuario::class, 'tipo_id');
    }
}
