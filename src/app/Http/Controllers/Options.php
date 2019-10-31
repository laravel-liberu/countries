<?php

namespace LaravelEnso\Countries\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Countries\app\Models\Country;
use LaravelEnso\Select\app\Traits\OptionsBuilder;
use LaravelEnso\Countries\app\Http\Resources\Country as Resource;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Country::class;

    protected $resource = Resource::class;
}
