<?php

namespace LaravelEnso\Countries\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Countries\app\Http\Resources\Country as Resource;
use LaravelEnso\Countries\app\Models\Country;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Country::class;

    protected $resource = Resource::class;

    protected $queryAttributes = ['name', 'iso_3166_3'];
}
