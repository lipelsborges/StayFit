<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'itens';

    protected $fillable = [
        'nome',
        'valor',
        'estoque',
    ];

    public function consumos()
    {
        return $this->hasMany(Consumo::class, 'item_id');
    }
}
