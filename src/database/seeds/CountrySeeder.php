<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use LaravelEnso\Countries\app\Models\Country;

class CountrySeeder extends Seeder
{
    const JSON = __DIR__.'../countries.json';

    public function run()
    {
        if (config('app.env') === 'testing') {
            $this->countries()->slice(0, 10)
                ->each(function ($country) {
                    Country::create($country);
                });

            return;
        }

        $this->countries()
            ->each(function ($country) {
                Country::create($country);
            });
    }

    public function countries()
    {
        $countries = json_decode(File::get(self::JSON), true);

        return collect($countries);
    }
}
