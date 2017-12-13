<?php

namespace LaravelEnso\RoAddresses;

use Illuminate\Support\ServiceProvider;

class RoAddressesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishesAll();
        $this->loadDependencies();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    private function publishesAll()
    {
        $this->publishes([
            __DIR__.'/config' => config_path(),
        ], 'ro-addresses-config');

        $this->publishes([
            __DIR__.'/app/Forms' => app_path().'/Forms/vendor/',
        ], 'ro-addresses-form');
    }

    private function loadDependencies()
    {
        $this->mergeConfigFrom(__DIR__.'/config/addresses.php', 'addresses');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadMigrationsFrom([__DIR__.'/database/migrations', __DIR__.'/database/migrations/localities']);
    }
}
