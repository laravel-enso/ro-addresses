<?php

namespace LaravelEnso\RoAddresses\app\Models;

use LaravelEnso\AddressesManager\app\Models\Address as Addresses;

class Address extends Addresses
{
    private const RomaniaCountryId = 184;

    protected $fillable = ['addressable_id', 'addressable_type', 'county_id', 'locality_id', 'type', 'is_default', 'apartment', 'floor', 'entry',
        'building_type', 'building', 'number', 'street', 'street_type', 'neighbourhood', 'postal_area', 'obs', ];

    protected $attributes = ['country_id' => self::RomaniaCountryId];

    protected $appends = ['locality_name', 'county_name', 'country_name', 'label'];

    protected $casts = ['is_default' => 'boolean'];

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
