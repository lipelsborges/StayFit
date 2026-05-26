<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensalidade extends Model
{
    protected $table = 'mensalidade';

    protected $fillable = [
        'id_aluno',
        'data_inicio',
        'data_vencimento',
        'status_id',
    ];

    protected $casts = [
        'data_inicio'     => 'date',
        'data_vencimento' => 'date',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class, 'id_aluno');
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
