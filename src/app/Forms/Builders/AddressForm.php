<?php

namespace LaravelEnso\RoAddresses\app\Forms\Builders;

use LaravelEnso\Forms\app\Services\Form;
use LaravelEnso\Addresses\app\Models\Country;
use LaravelEnso\RoAddresses\app\Enums\Sectors;
use LaravelEnso\RoAddresses\app\Models\County;
use LaravelEnso\RoAddresses\app\Models\Locality;
use LaravelEnso\Addresses\app\Forms\Builders\AddressForm as BaseAddressForm;

class AddressForm extends BaseAddressForm
{
    protected const TemplatePath = __DIR__.'/../Templates/address.json';

    protected $form;

    public function __construct()
    {
        $this->form = (new Form($this->templatePath()))
            ->options('county_id', County::active()->get(['name', 'id']))
            ->options('sector', Sectors::select())
            ->value('country', 'Romania')
            ->append(
                'bucharestId',
                Locality::whereName('Bucuresti')->first()->id
            );
    }

    public function create()
    {
        return $this->form->title('Insert')
            ->value('country_id', Country::whereName('Romania')->first()->id)
            ->create();
    }
}
