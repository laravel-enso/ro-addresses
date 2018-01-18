<?php

Route::middleware(['web', 'auth', 'core'])
    ->namespace('LaravelEnso\RoAddresses\app\Http\Controllers')
    ->group(function () {
        Route::prefix('addresses')->as('addresses.')->group(function () {
            Route::get('list', 'AddressesController@list')->name('list');
            Route::get('setDefault/{address}', 'AddressesController@setDefault')->name('setDefault');
            Route::post('/{type}/{id}', 'AddressesController@store')->name('store');
        });

        Route::prefix('localities')->as('localities.')->group(function () {
            Route::get('getOptionList', 'LocalitiesSelectController@getOptionList')->name('getOptionList');
        });

        Route::resource('addresses', 'AddressesController',
            ['except' => ['show', 'store']]);
    });
