<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    protected $table = 'tipo_usuario';

    protected $fillable = [
        'nome',
    ];

    public function usuarios()
    {
        return $this->hasMany(Usuario::class, 'tipo_id');
    }
}
