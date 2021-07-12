<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Modules\Club4H\Entities\Participant;

class Gender extends Model
{
    protected $connection = 'portal';

    function Participant()
    {
        return $this->belongsTo(Participant::class);
    }
}
