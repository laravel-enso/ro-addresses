<?php

namespace LaravelEnso\RoAddresses;

use LaravelEnso\RoAddresses\app\Enums\Sectors;
use LaravelEnso\Enums\EnumServiceProvider as ServiceProvider;

class EnumServiceProvider extends ServiceProvider
{
    protected $register = [
        'sectors' => Sectors::class,
    ];
}
