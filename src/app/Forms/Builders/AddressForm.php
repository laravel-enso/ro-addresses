<?php

namespace LaravelEnso\RoAddresses\app\Forms\Builders;

use LaravelEnso\AddressesManager\app\Enums\BuildingTypes;
use LaravelEnso\AddressesManager\app\Enums\StreetTypes;
use LaravelEnso\FormBuilder\app\Classes\Form;
use LaravelEnso\RoAddresses\app\Enums\Sectors;
use LaravelEnso\RoAddresses\app\Models\Address;
use LaravelEnso\RoAddresses\app\Models\County;

class AddressForm
{
    private const FormPath = __DIR__.'/../Templates/address.json';

    private $form;

    public function __construct()
    {
        $this->form = (new Form($this->formPath()))
            ->options('street_type', StreetTypes::select())
            ->options('building_type', BuildingTypes::select())
            ->options('county_id', County::active()->get(['name', 'id']))
            ->options('sector', Sectors::select())
            ->value('country', 'Romania');
    }

    public function create()
    {
        return $this->form->title('Insert')
            ->create();
    }

    public function edit(Address $address)
    {
        return $this->form->title('Edit')
            ->actions(['update'])
            ->edit($address);
    }

    private function formPath()
    {
        $publishedForm = app_path('Forms/vendor/address.json');

        return \File::exists($publishedForm)
            ? $publishedForm
            : self::FormPath;
    }
}
