<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;

class User extends Authenticatable implements Billable
{
    use Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     */

    protected $dates    = ['trial_ends_at', 'subscription_ends_at'];


    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
