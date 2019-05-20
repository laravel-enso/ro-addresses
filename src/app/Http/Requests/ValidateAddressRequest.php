<?php

namespace LaravelEnso\RoAddresses\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use LaravelEnso\Addresses\app\Exceptions\AddressException;
use LaravelEnso\Addresses\App\Http\Requests\ValidateAddressRequest as ValidateBaseAddressRequest;

class ValidateAddressRequest extends ValidateBaseAddressRequest
{
    public function rules()
    {
        return collect(parent::rules())
            ->except(['city', 'sub_administrative_area', 'administrative_area'])
            ->merge(['county_id' => 'required', 'locality_id' => 'required'])
            ->toArray();
    }
}
