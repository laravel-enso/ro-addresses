<?php

namespace LaravelEnso\RoAddresses\App\Traits;

use LaravelEnso\RoAddresses\App\Models\Address;
use LaravelEnso\Addresses\App\Traits\Addressable as BaseAddressable;

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
