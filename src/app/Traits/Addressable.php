<?php

namespace LaravelEnso\RoAddresses\app\Traits;

use LaravelEnso\Addresses\app\Traits\Addressable as BaseAddressable;
use LaravelEnso\RoAddresses\app\Models\Address;

trait Addressable
{
    use BaseAddressable;

    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
}
