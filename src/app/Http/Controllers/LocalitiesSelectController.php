<?php

namespace LaravelEnso\RoAddresses\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LaravelEnso\RoAddresses\app\Models\Locality;
use LaravelEnso\Select\app\Traits\SelectListBuilder;

class LocalitiesSelectController extends Controller
{
    use SelectListBuilder;

    protected $selectSourceClass = Locality::class;
}
