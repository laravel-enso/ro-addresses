<?php

namespace LaravelEnso\RoAddresses\app\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelEnso\RoAddresses\app\Models\County;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class CountyOptions extends Controller
{
    use OptionsBuilder;

    protected $queryAttributes = ['name', 'abbreviation'];

    public function query()
    {
        return County::active();
    }
}
