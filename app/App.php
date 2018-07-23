<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    protected $connection = 'portal';

    function users()
    {
        return $this->belongsToMany(User::class);
    }
}
