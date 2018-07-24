<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $connection = 'portal';

    function users()
    {
        return $this->hasMany(User::class);
    }
}
