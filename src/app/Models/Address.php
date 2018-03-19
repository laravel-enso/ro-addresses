<?php

namespace LaravelEnso\RoAddresses\app\Models;

use LaravelEnso\AddressesManager\app\Models\Address as Addresses;

class Address extends Addresses
{
    private const RomaniaCountryId = 184;

    protected $fillable = ['addressable_id', 'addressable_type', 'county_id', 'locality_id', 'type', 'is_default', 'apartment', 'floor', 'entry',
        'building_type', 'building', 'number', 'street', 'street_type', 'neighborhood', 'postal_area', 'obs', ];

    protected $attributes = ['country_id' => self::RomaniaCountryId];

    protected $appends = ['city', 'administrative_area', 'country_name'];

    protected $casts = ['is_default' => 'boolean'];

    public function county()
    {
        return $this->belongsTo(County::class);
    }

    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }

    public function getCityAttribute()
    {
        return $this->locality->name;
    }

    public function getAdministrativeAreaAttribute()
    {
        return $this->county->name;
    }
}
