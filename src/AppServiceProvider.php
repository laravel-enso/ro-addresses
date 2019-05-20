<?php

namespace LaravelEnso\RoAddresses;

use Illuminate\Support\ServiceProvider;
use LaravelEnso\Addresses\app\Models\Address;
use LaravelEnso\Addresses\app\Forms\Builders\AddressForm;
use LaravelEnso\RoAddresses\app\Models\Address as RoAddress;
use LaravelEnso\Addresses\App\Http\Requests\ValidateAddressRequest;
use LaravelEnso\RoAddresses\app\Forms\Builders\AddressForm as Form;
use LaravelEnso\RoAddresses\app\Http\Requests\ValidateAddressRequest as ValidateRoAddressRequest;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->customize()
            ->loadDependencies()
            ->publishesDependencies();
    }

    private function customize()
    {
        $this->app->bind(AddressForm::class, function () {
            return new Form();
        });

        $this->app->bind(Address::class, function () {
            return new RoAddress();
        });

        $this->app->bind(ValidateAddressRequest::class, function () {
            return new ValidateRoAddressRequest();
        });

        return $this;
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
