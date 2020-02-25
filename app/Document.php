<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{

    protected $guarded = [];

    function office()
    {
        return $this->belongsTo(Office::class);
    }
}
