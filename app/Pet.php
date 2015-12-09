<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
    	'nome',
    	'owner_id'
    ];

    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
