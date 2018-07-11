<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{

    /**
     * @var array
     */
    protected $hidden = ['city_id', 'created_at', 'updated_at'];

    /**
     * Model Relationships
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    function city()
    {
        return $this->belongsTo(City::class);
    }

    function farmers()
    {
        return $this->hasMany(Farmer::class);
    }

}
