<?php

namespace LaravelEnso\RoAddresses\app\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelEnso\RoAddresses\app\Models\Address;
use LaravelEnso\Addresses\App\Http\Requests\ValidateAddressFetch;
use LaravelEnso\RoAddresses\app\Http\Resources\Address as Resource;

class Index extends Controller
{
    public function __invoke(ValidateAddressFetch $request)
    {
        return Resource::collection(
            Address::for($request->validated())
                ->with(['locality', 'county'])
                ->ordered()
                ->get()
        );
    }
}
