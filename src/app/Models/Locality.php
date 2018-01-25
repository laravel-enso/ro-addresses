<?php

namespace LaravelEnso\RoAddresses\app\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Helpers\app\Traits\IsActive;

class Locality extends Model
{
    use IsActive;

    protected $fillable = ['county_id', 'name', 'township', 'SIRUTA'];
    protected $appends = ['displayLabel'];

    public function county()
    {
        return $this->belongsTo(County::class);
    }

    /* helpers */
    public function getDisplayLabelAttribute()
    {
        return $this->township ? $this->name.' ('.$this->township.')' : $this->name;
    }
}
