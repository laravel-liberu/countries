<?php

use Illuminate\Support\Facades\Route;
use LaravelEnso\Countries\Http\Controllers\Options;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/core/countries')->as('core.countries.')
    ->group(function () {
        Route::get('options', Options::class)->name('options');
    });
