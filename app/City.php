<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function lines()
    {
        return $this->belongsToMany(Line::class, 'destinations', 'line_id', 'city_id')
        ->withPivot(['position']);
    }

    public function days()
    {
        return $this->hasMany(Day::class, 'line_id', 'id');
    }
}
