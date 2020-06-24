<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/core/countries')->as('core.countries.')
    ->namespace('LaravelEnso\Countries\Http\Controllers')
    ->group(function () {
        Route::get('options', 'Options')->name('options');
    });
