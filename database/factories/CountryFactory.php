<?php

namespace LaravelEnso\Countries\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelEnso\Countries\Models\Country;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition()
    {
        return [
            'name' => $faker->country,
            'iso_3166_2' => $faker->countryCode,
            'iso_3166_3' => $faker->countryISOAlpha3,
            'capital' => null,
            'citizenship' => null,
            'country_code' => null,
            'currency' => null,
            'currency_code' => null,
            'currency_sub_unit' => null,
            'currency_symbol' => null,
            'currency_decimals' => null,
            'full_name' => null,
            'region_code' => null,
            'sub_region_code' => null,
            'eea' => null,
            'calling_code' => null,
            'flag' => null,
        ];
    }
}
