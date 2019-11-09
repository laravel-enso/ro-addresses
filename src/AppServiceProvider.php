<?php

namespace LaravelEnso\RoAddresses;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Addresses\app\Forms\Builders\AddressForm;
use LaravelEnso\Addresses\App\Http\Requests\ValidateAddressRequest;
use LaravelEnso\Addresses\app\Models\Address;
use LaravelEnso\RoAddresses\app\Forms\Builders\AddressForm as Form;
use LaravelEnso\RoAddresses\app\Http\Requests\ValidateAddressRequest as ValidateRoAddressRequest;
use LaravelEnso\RoAddresses\app\Models\Address as RoAddress;

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
        ], 'ro-addresses-seeders');

        $this->publishes([
            __DIR__.'/database/seeds' => database_path('seeds'),
        ], 'enso-seeders');

        $this->publishes([
            __DIR__.'/config' => config_path('enso'),
        ], 'ro-addresses-config');

        $this->publishes([
            __DIR__.'/app/Forms/Templates' => app_path('Forms/vendor/'),
        ], 'ro-addresses-form');

        $this->publishes([
            __DIR__.'/app/Imports' => app_path('Imports/'),
        ], 'ro-addresses-import');

        $this->publishes([
            __DIR__.'/config' => config_path('enso'),
        ], 'enso-config');
    }
}
