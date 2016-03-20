<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','balance','stripe_customer_id',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function recipients()
    {
        return $this->hasMany('App\Recipient');
    }

    public function senders()
    {
        return $this->hasMany('App\Sender');
    }

    public function balances()
    {
        return $this->hasMany('App\Balance');
    }

    public function orders()
    {
        return $this->hasMany('App\Order');
    }
}
