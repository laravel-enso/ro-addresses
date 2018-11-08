<?php

namespace LaravelEnso\RoAddresses\app\Forms\Builders;

use LaravelEnso\AddressesManager\app\Models\Country;
use LaravelEnso\FormBuilder\app\Classes\Form;
use LaravelEnso\RoAddresses\app\Enums\Sectors;
use LaravelEnso\RoAddresses\app\Models\Address;
use LaravelEnso\RoAddresses\app\Models\County;
use LaravelEnso\RoAddresses\app\Models\Locality;

class AddressForm
{
    private const TemplatePath = __DIR__.'/../Templates/address.json';

    private $form;

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

    public function edit(Address $address)
    {
        return $this->form->title('Edit')
            ->actions('update')
            ->edit($address);
    }

    private function templatePath()
    {
        $file = config('enso.addresses.formTemplate');
        $templatePath = base_path($file);

        return $file && \File::exists($templatePath)
            ? $templatePath
            : self::TemplatePath;
    }
}
