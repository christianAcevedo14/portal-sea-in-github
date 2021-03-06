<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TutorialVideo extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $connection = 'portal';

    function tutorial_sections()
    {
        return $this->belongsTo(TutorialSection::class);
    }
}
