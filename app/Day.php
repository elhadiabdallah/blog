<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    /**
     * Get the line that owns the Day
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function line()
    {
        return $this->belongsTo(Line::class);
    }

    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'voyages','day_id', 'destination_id')->withPivot('time');
    }

}
