<?php

Route::middleware(['web', 'auth', 'core'])
    ->prefix('api/core/addresses')
    ->as('core.addresses.')
    ->namespace('LaravelEnso\RoAddresses\app\Http\Controllers')
    ->group(function () {
        Route::get('localitiesOptions', 'LocalityOptions')->name('localitiesOptions');
        Route::get('', 'Index')->name('index');
    });
