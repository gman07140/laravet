<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Client extends Model
{
    protected $fillable = [
    	'nome',
    	'sobrenome',
    	'CNPJ',
        'fone',
    	'endereco',
    	'cpf',
    	'email',
        'lat',
        'lng',
    	'bairro',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function bairro()
    {
        return $this->belongsTo('App\Bairro');
    }

    public function pets()
    {
        return $this->hasMany('App\Pet');
    }

    public function numbers()
    {
        return $this->hasMany('App\Number');
    }

}
