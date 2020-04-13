<?php

namespace LaravelEnso\RoAddresses\App\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelEnso\Addresses\App\Http\Requests\ValidateAddressFetch;
use LaravelEnso\RoAddresses\App\Http\Resources\Address as Resource;
use LaravelEnso\RoAddresses\App\Models\Address;

class Index extends Controller
{
    public function __invoke(ValidateAddressFetch $request)
    {
        return Resource::collection(
            Address::for($request->get('addressable_id'), $request->get('addressable_type'))
                ->with(['locality', 'county'])
                ->ordered()
                ->get()
        );
    }
}
