<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    function users()
    {
        return $this->hasMany(User::class);
    }
}
