<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Factura extends Model
{

    protected $fillable = [
        'user_id', 'partner_id', 'tipo', 'entity_id', 'alcance', 'emision', 'vencimiento', 'observaciones',
        'periodo', 'balance_id', 'voucher_id',
    ];

    public function user()
    {
        return $this->belongTo(User::class,'user_id');
    }

    public function balance()
    {
        return $this->hasOne(balance::class);
    }

    public function nCuenta()
    {
        return $this->hasOne(partner::class);
    }

    public function entidad()
    {
        return $this->hasOne(entity::class);
    }

    public function comprobante()
    {
        return $this->hasOne(voucher::class);
    }

    /*public function getActualAttribute($field)
    {
        return $this->attributes[$field];
    }*/
}
