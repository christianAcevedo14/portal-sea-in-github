<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $connection = 'portal';

    /**
     * @var array
     */
    protected $hidden = ['created_at', 'updated_at'];

    /**
     * Relationships
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    function farmers()
    {
        return $this->hasMany(Farmer::class);
    }

    function zipcodes()
    {
        return $this->hasMany(Zipcode::class);
    }

}
