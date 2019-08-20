<?php

namespace LaravelEnso\RoAddresses\app\Traits;

use LaravelEnso\RoAddresses\app\Models\Address;
use LaravelEnso\Addresses\app\Traits\Addressable as BaseAddressable;

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
