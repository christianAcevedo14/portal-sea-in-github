<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $connection = 'portal';
    protected $guarded = [];
    protected $hidden = ['password', 'remember_token'];

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->surname}";
    }

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

    function scopeAgents($query)
    {
        return $query->where('title_id', 2);
    }

    public function getIsAdminAttribute(){

        return $this->title_id == 1;

    }

    public function getIsExtensionistAttribute(){
        return $this->title_id > 1;
    }
}
