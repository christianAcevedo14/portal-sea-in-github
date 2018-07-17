<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['title_id', 'programmatic_unit_id', 'first_name', 'initial', 'surname', 'second_surname', 'phone', 'email', 'password'];

    use Notifiable, SoftDeletes;

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

    public function getIsAdminAttribute(){

        return $this->title_id == 1;

    }

    public function getIsExtensionistAttribute(){
        return $this->title_id > 1;
    }
}
