<?php

namespace LaravelEnso\RoAddresses\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Resources\Json\Resource;
use LaravelEnso\RoAddresses\app\Models\Address;
use LaravelEnso\Addresses\App\Http\Requests\ValidateAddressFetch;

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
