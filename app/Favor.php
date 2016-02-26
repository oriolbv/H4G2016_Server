<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favor extends Model
{
    protected $fillable = ['titol', 'descripcio', 'lat', 'long', 'demanar', 'categoria', 'user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function scopeDemanats($query)
    {
        return $query->where('demanar', 1);
    }

    public function scopeOferts($query)
    {
        return $query->where('demanar', 0);
    }
}
