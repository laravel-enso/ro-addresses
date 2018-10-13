<?php

namespace LaravelEnso\RoAddresses\app\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelEnso\RoAddresses\app\Models\Address;
use LaravelEnso\RoAddresses\app\Forms\Builders\AddressForm;
use LaravelEnso\AddressesManager\App\Http\Requests\ValidateAddressRequest;
use LaravelEnso\AddressesManager\App\Http\Requests\ValidateAddressIndexRequest;

class AddressesController extends Controller
{
    public function index(ValidateAddressIndexRequest $request)
    {
        return Address::for($request->validated())
                ->ordered()
                ->get();
    }

    public function store()
    {
        $request = app()->make($this->requestValidator());

        Address::create($request->all());

        return [
            'message' => __('The address was successfully created'),
        ];
    }

    public function update(Address $address)
    {
        $request = app()->make($this->requestValidator());

        $address->update($request->except(['country']));

        return [
            'message' => __('The address have been successfully updated'),
        ];
    }

    public function setDefault(Address $address)
    {
        $address->setDefault();
    }

    public function destroy(Address $address)
    {
        $address->delete();

        return ['message' => __('Operation was successful')];
    }

    public function edit(Address $address, AddressForm $form)
    {
        return ['form' => $form->edit($address)];
    }

    public function create(AddressForm $form)
    {
        return ['form' => $form->create()];
    }

    private function requestValidator()
    {
        return class_exists(config('enso.addresses.requestValidator'))
            ? config('enso.addresses.requestValidator')
            : ValidateAddressRequest::class;
    }
}
