<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
	protected $table = 'numbers';
	protected $primaryKey = 'numid';
	public $timestamps = false;
	protected $fillable = [
	    'clientid',
	    'number',
	    'type',
	    'note'
	];

	public function client()
    {
        return $this->belongsTo('App\Client');
    }
}