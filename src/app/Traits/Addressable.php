<?php
/**
 * Created by PhpStorm.
 * User: mihai
 * Date: 12/6/17
 * Time: 10:59 AM.
 */

namespace LaravelEnso\RoAddresses\app\Traits;

use LaravelEnso\RoAddresses\app\Models\Address;

trait Addressable
{
    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }

    public function defaultAddress()
    {
        return $this->addresses()->where('is_default', true)->first();
    }
}
