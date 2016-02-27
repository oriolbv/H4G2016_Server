<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FavorUser extends Model
{
    protected $fillable = ['favor_id', 'user_id_rebut', 'user_id_donant'];
}
