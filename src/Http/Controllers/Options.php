<?php

namespace LaravelLiberu\Countries\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Countries\Http\Resources\Country as Resource;
use LaravelLiberu\Countries\Models\Country;
use LaravelLiberu\Select\Traits\OptionsBuilder;

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
