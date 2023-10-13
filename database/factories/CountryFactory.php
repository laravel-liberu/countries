<?php

namespace LaravelLiberu\Countries\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelLiberu\Countries\Models\Country;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition()
    {
        return [
            'name' => $this->faker->country,
            'iso_3166_2' => $this->faker->countryCode,
            'iso_3166_3' => $this->faker->countryISOAlpha3,
            'capital' => null,
            'citizenship' => null,
            'country_code' => null,
            'currency' => null,
            'currency_code' => null,
            'currency_sub_unit' => null,
            'currency_symbol' => null,
            'currency_decimals' => null,
            'full_name' => null,
            'region_code' => $this->faker->numberBetween(2, 150),
            'sub_region_code' => $this->faker->numberBetween(15, 151),
            'eea' => $this->faker->numberBetween(0, 1),
            'calling_code' => null,
            'flag' => null,
            'is_active' => $this->faker->boolean,
        ];
    }
}
