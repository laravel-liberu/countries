<?php

use LaravelEnso\Migrator\Database\Migration;

return new class extends Migration
{
    protected array $permissions = [
        ['name' => 'core.countries.options', 'description' => 'Get country options for select', 'is_default' => false],
    ];
};
