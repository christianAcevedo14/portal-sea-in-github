<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammaticUnit extends Model
{
    function region()
    {
        return $this->belongsTo(Region::class);
    }
    function users()
    {
        return $this->hasMany(User::class);
    }
}
