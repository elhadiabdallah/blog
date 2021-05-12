<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Destination extends Pivot
{
    protected $table = 'destinations';

    public function line() {
        return $this->belongsTo(Line::class);
    }

    public function city() {
        return $this->belongsTo(City::class);
    }
    /**
     * Get all of the voyages for the Destination
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function days()
    {
        return $this->belongsToMany(Day::class, 'voygages',  'destination_id', 'day_id')->withPivot('time');
    }

    
}
