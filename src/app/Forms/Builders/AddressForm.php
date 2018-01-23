<?php

namespace LaravelEnso\RoAddresses\app\Forms\Builders;

use LaravelEnso\AddressesManager\app\Enums\BuildingTypes;
use LaravelEnso\AddressesManager\app\Enums\StreetTypes;
use LaravelEnso\FormBuilder\app\Classes\Form;
use LaravelEnso\RoAddresses\app\Models\Address;
use LaravelEnso\RoAddresses\app\Models\County;

class AddressForm
{
    private const FormPath = __DIR__.'/../Templates/address.json';

    private $form;

    public function __construct()
    {
        $this->form = new Form($this->formTemplate());
    }

    public function create()
    {
        return $this->form->title('Insert')
            ->options('street_type', StreetTypes::object())
            ->options('building_type', BuildingTypes::object())
            ->options('county_id', County::pluck('name', 'id'))
            ->create();
    }

    public function edit(Address $address)
    {
        return $this->form->title('Edit')
            ->actions(['update', 'destroy'])
            ->options('street_type', StreetTypes::object())
            ->options('building_type', BuildingTypes::object())
            ->options('county_id', County::pluck('name', 'id'))
            ->edit($address);
    }

    private function formTemplate()
    {
        $publishedForm = app_path('Forms/vendor/address.json');

        if (file_exists($publishedForm)) {
            return $publishedForm;
        }

        return self::FormPath;
    }
}
