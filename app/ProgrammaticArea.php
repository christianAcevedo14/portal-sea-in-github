<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Sise\Entities\Program;
use Modules\Volunteer\Entities\Category;
use Modules\Volunteer\Entities\Volunteer;

class ProgrammaticArea extends Model
{
    protected $guarded = [];
    protected $fillable = [];
    protected $connection = 'portal';
    use SoftDeletes;

    public function categories(){
        return $this->hasMany(Category::class);
    }

    public function volunteers()
    {
        return $this->hasMany(Volunteer::class);
    }

    public function programs() {
        return $this->hasMany(Program::class, 'id');
    }
}
