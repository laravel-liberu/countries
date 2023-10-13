<?php

namespace LaravelLiberu\Countries\Database\Seeders;

use Illuminate\Database\Seeder;
use LaravelLiberu\Countries\Models\Country;
use LaravelLiberu\Helpers\Services\JsonReader;

class CountrySeeder extends Seeder
{
    private const Json = 'vendor/laravel-liberu/countries/database/countries.json';

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
