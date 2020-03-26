<?php

namespace LaravelEnso\RoAddresses\App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelEnso\RoAddresses\App\Models\County;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class CountyOptions extends Controller
{
    use OptionsBuilder;

    protected $queryAttributes = ['name', 'abbreviation'];

    public function query()
    {
        return County::active();
    }
}
