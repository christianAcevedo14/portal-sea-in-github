<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{

    protected $guarded = [];

    function documents()
    {
        return $this->hasMany(Document::class);
    }
}
