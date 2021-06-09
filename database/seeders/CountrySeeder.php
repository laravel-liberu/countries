<?php

namespace LaravelEnso\Countries\Database\Seeders;

use Illuminate\Database\Seeder;
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
        return (new JsonReader(base_path(self::Json)))->collection();
    }
}
