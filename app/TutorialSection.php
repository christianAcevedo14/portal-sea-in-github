<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TutorialSection extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $connection = 'portal';

    function tutorial_apps()
    {
        return $this->belongsTo(TutorialApp::class);
    }

    function tutorial_videos()
    {
        return $this->hasMany(TutorialVideo::class);
    }
}
