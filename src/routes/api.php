<?php

Route::middleware(['web', 'auth', 'core'])
    ->prefix('api/core')->as('core.')
    ->namespace('LaravelEnso\RoAddresses\app\Http\Controllers')
    ->group(function () {
        Route::patch('addresses/setDefault/{address}', 'AddressesController@setDefault')->name('addresses.setDefault');
        Route::get('addresses/localitiesSelectOptions', 'LocalitiesSelectController@options')->name('addresses.localitiesSelectOptions');
        Route::resource('addresses', 'AddressesController', ['except' => ['show']]);
    });
