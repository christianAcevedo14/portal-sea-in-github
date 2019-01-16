<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Modules\Sise\Entities\Plan;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    protected $connection = 'portal';
    protected $guarded = [];
    protected $hidden = ['password', 'remember_token'];

    function apps()
    {
        return $this->belongsToMany(App::class);
    }

    function plans()
    {
        return $this->hasMany(Plan::class);
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

    function scopeCfc($query)
    {
        return $query->where('title_id', 12);
    }

    function scopeSpecialists($query)
    {
        return $query->whereHas('programmatic_unit', function ($q) {
            $q->where('id', 'like', '6%');
        })->whereNotIn('title_id', [1, 4, 46]);
    }

    public function getIsAdminAttribute()
    {
        return $this->title_id == 1;
    }

    public function getIsSpecialistAttribute()
    {
        return $this->programmatic_unit->region_id == 600;
    }

    public function getIsCoordAttribute()
    {
        if ($this->title_id == 23 || $this->title_id == 24)
            return true;
    }

    public function getRegionAttribute()
    {
        return substr($this->programmatic_unit->region_id, 0, 1);
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->surname}";
    }
}
