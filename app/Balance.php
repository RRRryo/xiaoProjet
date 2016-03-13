<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{

    protected $fillable = [
        'balance', 'description', 'user_id','created_at',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }}
