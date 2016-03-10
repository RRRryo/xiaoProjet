<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipient extends Model
{
    protected $fillable = [
        'name', 'company', 'address','postal_code','city','country','telephone','user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
