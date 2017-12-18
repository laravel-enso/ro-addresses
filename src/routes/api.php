<?php

Route::middleware(['web', 'auth', 'core'])
    ->prefix('api')
    ->namespace('LaravelEnso\RoAddresses\app\Http\Controllers')
    ->group(function () {
        Route::prefix('addresses')->as('addresses.')->group(function () {
            Route::get('{address}/edit', 'AddressesController@getEditForm')->name('edit');
            Route::get('create', 'AddressesController@getCreateForm')->name('create');
            Route::get('list', 'AddressesController@list')->name('list');
            Route::get('setDefault/{address}', 'AddressesController@setDefault')->name('setDefault');
            Route::post('/{type}/{id}', 'AddressesController@store')->name('store');
            Route::patch('/{address}', 'AddressesController@update')->name('update');
        });

        Route::prefix('localities')->as('localities.')->group(function () {
            Route::get('getOptionList', 'LocalitiesSelectController@getOptionList')->name('getOptionList');
        });
    });
