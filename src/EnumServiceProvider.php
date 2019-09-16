<?php

namespace LaravelEnso\RoAddresses;

use LaravelEnso\RoAddresses\app\Enums\Sectors;
use LaravelEnso\IO\EnumServiceProvider as ServiceProvider;

class EnumServiceProvider extends ServiceProvider
{
    protected $register = [
        'sectors' => Sectors::class,
    ];
}
