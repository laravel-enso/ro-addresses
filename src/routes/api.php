<?php

Route::middleware(['web', 'auth', 'core'])
    ->prefix('api/core')->as('core.')
    ->namespace('LaravelEnso\RoAddresses\app\Http\Controllers')
    ->group(function () {
        Route::prefix('addresses')->as('addresses.')->group(function () {
            Route::patch('setDefault/{address}', 'AddressesController@setDefault')->name('setDefault');
            Route::get('localitiesSelectOptions', 'LocalitiesSelectController@getOptionList')->name('localitiesSelectOptions');
        });

        Route::resource('addresses', 'AddressesController',
            ['except' => ['show']]);
    });
