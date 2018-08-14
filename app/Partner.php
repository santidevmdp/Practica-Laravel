<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

    protected $fillable = [
        'cuenta', 'cliente',
    ];

    public function factura()
    {
        return $this->belongTo(factura::class);
    }
}
