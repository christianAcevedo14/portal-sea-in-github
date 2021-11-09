<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Modules\Cfc\Entities\Participant;
use Modules\Cfc\Entities\Project;
use Modules\Cfc\Entities\PurposeVisit;
use Modules\Club4H\Entities\ProjectUser;
use Modules\Sise\Entities\AccessRequest;
use Modules\Sise\Entities\FederalProgramPersonContact;
use Modules\Sise\Entities\Historia;
use Modules\Sise\Entities\Plan;
use Modules\Volunteer\Entities\Category;
use Modules\Volunteer\Entities\Comment;
use Modules\Volunteer\Entities\Licence;
use Modules\Volunteer\Entities\Skill;
use Modules\Volunteer\Entities\Volunteer;

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

    function access_requests()
    {
        return $this->hasMany(AccessRequest::class);
    }

    function participants()
    {
        return $this->hasMany(Participant::class);
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
        return $query->whereIn('title_id', [2, 12]);
    }

    function scopeCfc($query)
    {
        return $query->whereIn('title_id', [12, 14]);
    }

    function scopeCoordinators($query)
    {
        return $query->whereIn('title_id', [23, 24]);
    }

    function scopeSpecialists($query)
    {
        return $query->whereHas('programmatic_unit', function ($q) {
            $q->where('id', 'like', '6%');
        })->whereNotIn('title_id', [1, 4, 46]);
    }

    function scopeDirectors($query)
    {
        return $query->whereIn('title_id', [46, 55]);
    }

    function scopeAdministrativo($query)
    {
        return $query->whereIn('title_id', [16, 15, 22, 26, 27, 40, 42, 45, 47, 48, 49]);
    }

    function scopeSupervisors($query)
    {
        return $query->whereIn('title_id', [46, 26, 16, 23, 24, 27, 42, 40, 47]);
    }

    function scopePean($query)
    {
        return $query->where('title_id', 16);
    }

    function scopeAssocDean($query)
    {
        return $query->where('title_id', 42);
    }

    function scopeAuxDean($query)
    {
        return $query->where('title_id', 40);
    }

    function scopeCFCs($query)
    {
        return $query->where('title_id', 47);
    }

    function scopePIA($query)
    {
        return $query->where('title_id', 50);
    }

    function scopeAgricultura($query)
    {
        return $query->where('title_id', 27);
    }

    public function getIsPeanAttribute()
    {
        return $this->title_id == 16;
    }

    public function getIsAdminAttribute()
    {
        return $this->title_id == 1;
    }

    public function getIsDirectorAttribute()
    {
        return $this->title_id == 46;
    }

    public function getIsOpeAttribute()
    {
        return $this->title_id == 26;
    }

    public function getIsFPPCAttribute()
    {
        $fppcUsers = FederalProgramPersonContact::pluck('user_id')->toArray();

        if (in_array($this->id, $fppcUsers)){
            return true;
        } else return false;

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

    public function getIsRegistratorAttribute()
    {
        return $this->title_id == 4;
    }

    public function getIsAssocDeanAttribute()
    {
        return $this->title_id == 42;
    }

    public function getIsAuxDeanAttribute()
    {
        return $this->title_id == 40;
    }

    public function getIsProgrammaticLeaderAttribute()
    {
        return $this->title_id == 27 || $this->title_id == 47 || $this->title_id == 48 || $this->title_id == 49;
    }

    public function getIsAgriculturaAttribute()
    {
        return $this->title_id == 27;
    }

    public function getIsCFCAttribute()
    {
        return $this->title_id == 47;
    }

    public function getIs4hAttribute()
    {
        return $this->title_id == 48
            || $this->user_id == 18;
    }

    public function getIsDRCAttribute()
    {
        return $this->title_id == 49;
    }

    public function getIsPIAAttribute()
    {
        return $this->title_id == 50;
    }

    public function getIsFacDeanAttribute(){
        return $this->title_id == 55;
    }

    public function getSupervisedByPeanAttribute()
    {
        return $this->title_id == 14;
    }

    public function getSupervisedByAssocDeanAttribute()
    {
        return $this->title_id == 15 ||
               $this->title_id == 23 ||
               $this->title_id == 26 ||
               $this->title_id == 40 ||
               $this->title_id == 45 ||
                $this->user_id == 143;
    }

    public function getSupervisedByAuxDeanAttribute()
    {
        return $this->title_id == 21 ||
               $this->title_id == 24 ||
               $this->title_id == 27 ||
               $this->title_id == 47 ||
               $this->title_id == 48 ||
               $this->title_id == 49 ||
               $this->title_id == 53;
    }
    public function getSupervisedByCFCAttribute()
    {
        return $this->title_id == 16 ||
               $this->title_id == 50;
    }
    public function getSupervisedByPIAAttribute()
    {
        return $this->title_id == 52;
    }

    public function getSupervisedByAgriculturaAttribute()
    {
        return  $this->id == 168    ||
                $this->title_id == 54;
    }

    public function getIsSupervisorAttribute()
    {
        return $this->title_id == 16 ||
               $this->title_id == 23 ||
               $this->title_id == 24 ||
               $this->title_id == 26 ||
               $this->title_id == 27 ||
               $this->title_id == 40 ||
               $this->title_id == 42 ||
               $this->title_id == 46 ||
               $this->title_id == 47 ||
               $this->title_id == 55;
    }

    public function getRegionAttribute()
    {
        return $this->programmatic_unit->region_id;
        /*return substr($this->programmatic_unit->region_id, 0, 1);*/
    }

    public function getRegionIDAttribute()
    {
        return $this->programmatic_unit->region_id;

    }

    public function getUnitAttribute()
    {
        return $this->programmatic_unit->id;
    }

    public function getSupervisedAttribute()
    {
        return $this->supervised_region;
        /*return substr($this->supervised_region, 0, 1);*/
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->initial} {$this->surname} {$this->second_surname}";
    }

    public function purposes()
    {
        return $this->hasMany(PurposeVisit::class);

    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function licences()
    {
        return $this->hasMany(Licence::class);
    }

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }

    public function comments()
    {
        return $this->belongsToMany(Comment::class);
    }

    public function historia()
    {
        return $this->hasMany(Historia::class);
    }
}
