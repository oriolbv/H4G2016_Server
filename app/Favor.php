<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favor extends Model
{
    protected $fillable = ['titol', 'descripcio', 'lat', 'long', 'demanar', 'categoria'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
