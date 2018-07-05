<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class App extends Model
{
    function users()
    {
        return $this->belongsToMany(User::class);
    }
}
