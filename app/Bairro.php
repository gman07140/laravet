<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bairro extends Model
{
	protected $fillable = [
    	'bairro'
    ];

    public function clients()
    {
        return $this->hasMany('App\Client');
    }
}
