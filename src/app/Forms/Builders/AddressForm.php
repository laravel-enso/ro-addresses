<?php

namespace LaravelEnso\RoAddresses\App\Forms\Builders;

use LaravelEnso\Addresses\App\Forms\Builders\AddressForm as BaseAddressForm;
use LaravelEnso\Countries\App\Models\Country;
use LaravelEnso\RoAddresses\App\Enums\Sectors;
use LaravelEnso\Addresses\App\Models\Address;
use LaravelEnso\RoAddresses\App\Models\County;
use LaravelEnso\RoAddresses\App\Models\Locality;

class AddressForm extends BaseAddressForm
{
    protected const TemplatePath = __DIR__.'/../Templates/address.json';

    public function create()
    {
        $this->prepare();
        $this->form->value('country_id', Country::whereName('Romania')->first()->id);

        return parent::create();
    }

    public function edit(Address $address)
    {
        $this->prepare();

        return parent::edit($address);
    }

    private function prepare(): void
    {
        $this->form->options('county_id', County::active()->get(['name', 'id']))
            ->options('sector', Sectors::select())
            ->value('country', 'Romania')
            ->append(
                'bucharestId',
                Locality::whereName('Bucuresti')->first()->id
            );
    }
}
