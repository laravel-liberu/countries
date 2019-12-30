<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'core'])
    ->prefix('api/core/countries')->as('core.countries.')
    ->namespace('LaravelEnso\Countries\App\Http\Controllers')
    ->group(function () {
        Route::get('options', 'Options')->name('options');
    });
