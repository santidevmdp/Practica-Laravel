<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    
    protected $fillable = [
        'office_id', 'nControl', 'pagado', 'fPago',
    ];
    
    public function factura()
    {
        return $this->belongTo(factura::class);
    }

    public function mPago()
    {
        return $this->belongTo(office::class);
    }
}
