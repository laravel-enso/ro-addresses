<?php

namespace LaravelEnso\RoAddresses\app\Models;

use LaravelEnso\Addresses\app\Models\Address as Addresses;

class Address extends Addresses
{
    protected $fillable = [
        'addressable_id', 'addressable_type', 'country_id', 'county_id', 'locality_id',
        'sector', 'neighbourhood', 'apartment', 'floor', 'entry', 'building',
        'building_type', 'number', 'street', 'street_type', 'postal_area', 'obs',
        'lat', 'long', 'is_default',
    ];

    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }

    public function getLocalityNameAttribute()
    {
        return $this->locality->name;
    }

    public function getCountyNameAttribute()
    {
        return $this->county->name;
    }

    public function getLabelAttribute()
    {
        return collect(config('enso.addresses.label.attributes'))
            ->map(function ($attribute) {
                return $this->$attribute;
            })->filter()
            ->implode(config('enso.addresses.label.separator'));
    }
}
