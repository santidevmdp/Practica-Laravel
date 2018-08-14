<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
    protected $table = 'entities';

    protected $fillable = [
        'title',
    ];


    public function factura()
    {
        return $this->belongTo(factura::class);
    }

}
