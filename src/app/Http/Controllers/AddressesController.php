<?php

namespace LaravelEnso\RoAddresses\app\Http\Controllers;

use App\Http\Controllers\Controller;
use LaravelEnso\RoAddresses\app\Forms\Builders\AddressForm;
use LaravelEnso\RoAddresses\app\Http\Requests\ValidateAddressRequest;
use LaravelEnso\RoAddresses\app\Http\Resources\Address as Resource;
use LaravelEnso\RoAddresses\app\Models\Address;

class AddressesController extends Controller
{

    public function index(ValidateAddressRequest $request)
    {
        return Resource::collection(
            Address::for($request->validated())
                ->with(['locality', 'county'])
                ->ordered()
                ->get()
        );
    }

    public function store(ValidateAddressRequest $request)
    {
        Address::create($request->except(['country']));

        return [
            'message' => __('The address was successfully created'),
        ];
    }

    public function update(ValidateAddressRequest $request, Address $address)
    {
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
}
