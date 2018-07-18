<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Factura extends Model
{

    protected $fillable = [
        'user_id', 'tipo', 'entidad', 'alcances', 'partida', 'fIngreso', 'fSalida', 'observaciones',
        'deuda', 'pagado', 'balance', 'estados', 'periodos', 
    ];

    public function user()
    {
        return $this->belongTo(User::class,'user_id');
    }
}
