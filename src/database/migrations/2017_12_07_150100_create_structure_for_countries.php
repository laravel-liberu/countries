<?php

use LaravelEnso\Migrator\app\Database\Migration;

class CreateStructureForCountries extends Migration
{
    protected $permissions = [
        ['name' => 'core.countries.options', 'description' => 'Get country options for select', 'type' => 0, 'is_default' => false],
    ];
}
