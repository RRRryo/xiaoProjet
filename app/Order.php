<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'balance', 'description', 'user_id','created_at','code',
    ];

    public function items()
    {
        return $this->hasMany('App\OrderItem');
    }
}
