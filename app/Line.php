<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Line extends Model
{
    /**
     * Get the cities that owns the Line
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function destinations()
    {
        return $this->belongsToMany(City::class, 'destinations', 'line_id', 'city_id');
    }

    /**
     * Get all of the days for the Line
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function days()
    {
        return $this->hasMany(Day::class);
    }
}
