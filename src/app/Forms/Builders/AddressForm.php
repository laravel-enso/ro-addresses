<?php

namespace LaravelEnso\RoAddresses\App\Forms\Builders;

use LaravelEnso\Addresses\App\Forms\Builders\AddressForm as BaseAddressForm;
use LaravelEnso\Countries\App\Models\Country;
use LaravelEnso\Forms\App\Services\Form;
use LaravelEnso\RoAddresses\App\Enums\Sectors;
use LaravelEnso\RoAddresses\App\Models\County;
use LaravelEnso\RoAddresses\App\Models\Locality;

class AddressForm extends BaseAddressForm
{
    protected const TemplatePath = __DIR__.'/../Templates/address.json';

    protected $form;

    public function __construct()
    {
        $this->form = (new Form(static::TemplatePath))
            ->options('county_id', County::active()->get(['name', 'id']))
            ->options('sector', Sectors::select())
            ->value('country', 'Romania')
            ->append(
                'bucharestId',
                Locality::whereName('Bucuresti')->first()->id
            );
    }

    public function create(): void
    {
        return $this->form->title('Create')
            ->value('country_id', Country::whereName('Romania')->first()->id)
            ->actions('store')
            ->create();
    }
}
