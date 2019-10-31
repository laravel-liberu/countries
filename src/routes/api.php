<?php

Route::middleware(['web', 'auth', 'core'])
    ->prefix('api/core/countries')->as('core.countries.')
    ->namespace('LaravelEnso\Countries\app\Http\Controllers')
    ->group(function () {
        Route::get('options', 'Options')->name('options');
    });
