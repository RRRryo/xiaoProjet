<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    protected $fillable = [
        'name', 'company', 'address','postal_code','city','country','telephone','user_id','note',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
