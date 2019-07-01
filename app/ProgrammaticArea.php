<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Volunteer\Entities\Category;

class ProgrammaticArea extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    use SoftDeletes;

    public function categories(){
        $this->hasMany(Category::class);
    }

}
