<?php

namespace App\Policies;

use App\User;
use App\Factura;
use Illuminate\Auth\Access\HandlesAuthorization;

class FacturaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function pase(User $user, Factura $factura)
    {
        return $user->id == $factura->user_id;
    }
}
