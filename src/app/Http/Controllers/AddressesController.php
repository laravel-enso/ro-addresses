<?php

namespace LaravelEnso\RoAddresses\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaravelEnso\AddressesManager\app\Exceptions\AddressException;
use LaravelEnso\AddressesManager\app\Handlers\ConfigMapper;
use LaravelEnso\AddressesManager\App\Http\Requests\ValidateAddressRequest;
use LaravelEnso\FormBuilder\app\Classes\Form;
use LaravelEnso\RoAddresses\app\Forms\Builders\AddressForm;
use LaravelEnso\RoAddresses\app\Models\Address;

class AddressesController extends Controller
{
    public function index()
    {
        $addressable = $this->getAddressable();

        return $addressable->addresses()->get();
    }

    public function store(ValidateAddressRequest $request, Address $address)
    {
        $address->store($request->all(), $request->get('_params'));

        return ['message' => __('Created Address')];
    }

    public function update(ValidateAddressRequest $request, Address $address)
    {
        $address->update($request->all());

        return ['message' => __('The Changes have been saved!')];
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

    private function getAddressable()
    {
        return (new ConfigMapper(request()->get('type')))->class()
            ::find(request()->get('id'));
    }
}
