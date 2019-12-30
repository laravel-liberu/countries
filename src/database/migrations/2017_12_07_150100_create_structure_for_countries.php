<?php

use LaravelEnso\Migrator\App\Database\Migration;
use LaravelEnso\Permissions\App\Enums\Types;

class CreateStructureForCountries extends Migration
{
    protected $permissions = [
        ['name' => 'core.countries.options', 'description' => 'Get country options for select', 'type' => Types::Read, 'is_default' => false],
    ];
}
