<?php

namespace LaravelEnso\Countries\app\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\DynamicMethods\app\Traits\Relations;
use LaravelEnso\Rememberable\app\Traits\Rememberable;

class Country extends Model
{
    use Relations, Rememberable;

    protected $fillable = [
        'name', 'iso_3166_2', 'iso_3166_3', 'capital', 'citizenship', 'country_code',
        'currency', 'currency_code', 'currency_sub_unit', 'currency_symbol',
        'currency_decimals', 'full_name', 'region_code', 'sub_region_code',
        'eea', 'calling_code', 'flag',
    ];
}
