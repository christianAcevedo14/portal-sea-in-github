<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgrammaticUnit extends Model
{
    protected $connection = 'portal';

    function region()
    {
        return $this->belongsTo(Region::class);
    }
    function users()
    {
        return $this->hasMany(User::class);
    }
}
