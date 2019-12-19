<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use LaravelEnso\Countries\app\Models\Country;

class CountrySeeder extends Seeder
{
    const JSON = __DIR__.'/../../vendor/laravel-enso/countries/src/database/countries.json';

    public function run()
    {
        $this->countries()
            ->each(fn($country) => Country::create($country));
    }

    public function countries()
    {
        $countries = json_decode(File::get(self::JSON), true);

        return config('app.env') === 'testing' 
            ? collect($countries)->slice(0, 10)
            : collect($countries);
    }
}
