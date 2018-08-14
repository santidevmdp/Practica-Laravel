<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{

    protected $fillable = ['title'];

    public function comprobante()
    {
        return $this->hasOne(voucher::class);
    }
    
}
