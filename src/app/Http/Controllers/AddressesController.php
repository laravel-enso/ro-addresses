<?php

namespace LaravelEnso\RoAddresses\app\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaravelEnso\AddressesManager\app\Enums\StreetTypes;
use LaravelEnso\AddressesManager\app\Exceptions\AddressException;
use LaravelEnso\AddressesManager\app\Handlers\ConfigMapper;
use LaravelEnso\RoAddresses\app\Forms\Builders\AddressForm;
use LaravelEnso\AddressesManager\App\Http\Requests\ValidateAddressRequest;
use LaravelEnso\Core\app\Exceptions\EnsoException;
use LaravelEnso\FormBuilder\app\Classes\Form;
use LaravelEnso\RoAddresses\app\Models\Address;
use LaravelEnso\RoAddresses\app\Models\County;

class AddressesController extends Controller
{

    public function index()
    {
        $addressable = $this->getAddressable();

        return $addressable->addresses()->get();
    }

    public function store(ValidateAddressRequest $request)
    {
        $params = (object) $request->get('_params');

        $address = new Address($request->all());
        $address->addressable_id = $params->id;
        $address->addressable_type = config('enso.addresses.addressables.'.$params->type);
        $address->is_default = $this->isTheFirst($address);

        $address->save();

        return [
            'message'  => __('Created Address'),
            'redirect' => '',
        ];
    }

    public function update(ValidateAddressRequest $request, Address $address)
    {
        $address->fill($request->all());
        $address->save();

        return [
            'message' => __('The Changes have been saved!'),
        ];
    }

    public function setDefault(Address $address)
    {
        DB::transaction(function () use ($address) {
            $this->unsetDefaultAddress($address);
            $address->is_default = true;
            $address->save();
        });

        return [
            'message' => __('Address set as default'),
        ];
    }

    public function destroy(Address $address)
    {
        if ($address->is_default) {
            throw new AddressException(__('The default address cannot be deleted'));
        }
        $address->delete();

        return [
            'message'  => __('Operation was successful'),
            'redirect' => '',
        ];
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

    private function isTheFirst(Address $address)
    {
        $count = $address->addressable->addresses()->count();

        return $count === 0;
    }

    private function unsetDefaultAddress(Address $address)
    {
        $defaultAddress = $address->addressable->addresses()
            ->whereIsDefault(true)
            ->first();

        if (!is_null($defaultAddress)) {
            $defaultAddress->is_default = false;
            $defaultAddress->save();
        }
    }
}
