<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $guarded = [];
    protected $hidden = ['password', 'remember_token'];

    function apps()
    {
        return $this->belongsToMany(App::class);
    }
    function programmatic_unit()
    {
        return $this->belongsTo(ProgrammaticUnit::class);
    }
    function title()
    {
        return $this->belongsTo(Title::class);
    }
}
