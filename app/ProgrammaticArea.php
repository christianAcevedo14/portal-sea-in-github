<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProgrammaticArea extends Model
{
    protected $guarded = [];
    protected $fillable = [];

    use SoftDeletes;
}
