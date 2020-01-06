<?php

namespace LaravelEnso\RoAddresses;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Addresses\App\Models\Address;
use LaravelEnso\Addresses\App\Forms\Builders\AddressForm;
use LaravelEnso\RoAddresses\App\Models\Address as RoAddress;
use LaravelEnso\Addresses\App\Http\Requests\ValidateAddressRequest;
use LaravelEnso\RoAddresses\App\Forms\Builders\AddressForm as Form;
use LaravelEnso\RoAddresses\App\Http\Requests\ValidateAddressRequest as ValidateRoAddressRequest;

class AppServiceProvider extends ServiceProvider
{
    public $bindings = [
        ValidateAddressRequest::class => ValidateRoAddressRequest::class,
        AddressForm::class => Form::class,
        Address::class => RoAddress::class,
    ];

    public function boot()
    {
        $this->loadDependencies()
            ->publishesDependencies();
    }

    private function loadDependencies()
    {
        $this->mergeConfigFrom(__DIR__.'/config/addresses.php', 'enso.addresses');

        $this->loadRoutesFrom(__DIR__.'/routes/api.php');

        $this->loadMigrationsFrom([__DIR__.'/database/migrations', __DIR__.'/database/migrations/localities']);

        return $this;
    }

    private function publishesDependencies()
    {
        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], ['ro-addresses-seeders', 'enso-seeders']);

        $this->publishes([
            __DIR__.'/config' => config_path('enso'),
        ], ['ro-addresses-config', 'enso-config']);

        $this->publishes([
            __DIR__.'/app/Forms/Templates' => app_path('Forms/vendor/'),
        ], 'ro-addresses-form');

        $this->publishes([
            __DIR__.'/app/Imports' => app_path('Imports/'),
        ], 'ro-addresses-import');
    }
}
