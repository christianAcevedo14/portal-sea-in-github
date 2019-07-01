<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Volunteer\Entities\Category;

class ProgrammaticArea extends Model
{
    protected $guarded = [];
    protected $fillable = [];
    protected $connection = 'portal';
    use SoftDeletes;

    public function categories(){
        return $this->hasMany(Category::class);
    }

}
