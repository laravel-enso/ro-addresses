<?php
/**
 * Created by PhpStorm.
 * User: mihai
 * Date: 12/5/17
 * Time: 1:36 PM.
 */

namespace LaravelEnso\RoAddresses\app\Models;

class Address extends \LaravelEnso\AddressesManager\app\Models\Address
{
    protected $fillable = ['country_id', 'county_id', 'locality_id', 'type', 'is_default', 'apartment', 'floor', 'entry',
        'building', 'number', 'street', 'street_type', 'neighborhood', 'postal_area', 'obs', ];

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
