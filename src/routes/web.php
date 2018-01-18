<?php

Route::middleware(['web', 'auth', 'core'])
    ->namespace('LaravelEnso\RoAddresses\app\Http\Controllers')
    ->group(function () {
        Route::prefix('addresses')->as('addresses.')->group(function () {
            Route::get('setDefault/{address}', 'AddressesController@setDefault')->name('setDefault');
            Route::get('localitiesSelectOptions', 'LocalitiesSelectController@getOptionList')->name('localitiesSelectOptions');
        });

        Route::resource('addresses', 'AddressesController', ['except' => ['show']]);
    });
