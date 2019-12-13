<?php

Route::middleware(['web', 'auth', 'core'])
    ->prefix('api/core/addresses')
    ->as('core.addresses.')
    ->namespace('LaravelEnso\RoAddresses\app\Http\Controllers')
    ->group(function () {
        require 'app/counties.php';
        require 'app/localities.php';
        require 'app/addresses.php';
    });
