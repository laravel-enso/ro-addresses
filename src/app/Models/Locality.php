<?php

namespace LaravelEnso\RoAddresses\app\Models;

use Illuminate\Database\Eloquent\Model;

class Locality extends Model
{
    protected $fillable = ['county_id', 'name'];

    public function county()
    {
        return $this->belongsTo(County::class);
    }
}
