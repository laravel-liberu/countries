<?php

namespace LaravelEnso\Countries\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Countries\App\Http\Resources\Country as Resource;
use LaravelEnso\Countries\App\Models\Country;
use LaravelEnso\Select\App\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Country::class;

    protected $resource = Resource::class;

    protected $queryAttributes = ['name', 'iso_3166_3'];
}
