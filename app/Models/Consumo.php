<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    protected $table = 'consumo';

    protected $fillable = [
        'aluno_id',
        'item_id',
        'quantidade',
        'valor_unitario',
    ];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
