<?php

namespace LaravelEnso\RoAddresses\app\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelEnso\RoAddresses\app\Models\Locality;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class LocalitiesSelectController extends Controller
{
    use OptionsBuilder;

    protected $class = Locality::class;
}
