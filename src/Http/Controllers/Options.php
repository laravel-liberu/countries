<?php

namespace LaravelEnso\Countries\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Countries\Http\Resources\Country as Resource;
use LaravelEnso\Countries\Models\Country;
use LaravelEnso\Select\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $resource = Resource::class;

    protected $queryAttributes = ['name', 'iso_3166_3'];

    public function query()
    {
        return Country::active();
    }
}
