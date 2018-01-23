<?php

namespace LaravelEnso\RoAddresses\app\Models;

class Address extends \LaravelEnso\AddressesManager\app\Models\Address
{
    private const RomaniaId = 185;

    protected $fillable = ['addressable_id', 'addressable_type', 'county_id', 'locality_id', 'type', 'is_default', 'apartment', 'floor', 'entry',
        'building_type', 'building', 'number', 'street', 'street_type', 'neighborhood', 'postal_area', 'obs', ];

    protected $attributes = ['country_id' => self::RomaniaId];

    protected $appends = ['city', 'administrative_area', 'country_name'];

    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }

    /* getters and setters */
    public function getCityAttribute()
    {
        return $this->locality->name;
    }

    public function getAdministrativeAreaAttribute()
    {
        return $this->county->name;
    }
}
