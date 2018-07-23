<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $connection = 'portal';

    function programmatic_units()
    {
        return $this->hasMany(ProgrammaticUnit::class);
    }
}
