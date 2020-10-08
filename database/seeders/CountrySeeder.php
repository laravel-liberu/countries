<?php

namespace LaravelEnso\Countries\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use LaravelEnso\Countries\Models\Country;
use LaravelEnso\Helpers\Services\JsonReader;

class CountrySeeder extends Seeder
{
    private const Json = 'vendor/laravel-enso/countries/database/countries.json';

    public function run()
    {
        $this->countries()
            ->each(fn ($country) => Country::create($country));
    }

    public function countries()
    {
        return (new JsonReader(base_path(self::Json)))->collection()
            ->when(App::environment('testing'), fn ($countries) => $countries->slice(0, 10));
    }
}
