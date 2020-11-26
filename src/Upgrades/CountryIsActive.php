<?php

namespace LaravelEnso\Countries\Upgrades;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use LaravelEnso\Countries\Models\Country;
use LaravelEnso\Upgrade\Contracts\MigratesData;
use LaravelEnso\Upgrade\Contracts\MigratesPostDataMigration;
use LaravelEnso\Upgrade\Contracts\MigratesTable;
use LaravelEnso\Upgrade\Helpers\Table;

class CountryIsActive implements MigratesTable, MigratesData, MigratesPostDataMigration
{
    public function isMigrated(): bool
    {
        return Table::hasColumn('countries', 'is_active');
    }

    public function migrateTable(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->boolean('is_active')->after('flag')->nullable();
        });
    }

    public function migrateData(): void
    {
        Country::whereNull('is_active')->update([
            'is_active' => true,
        ]);
    }

    public function migratePostDataMigration(): void
    {
        Schema::table('countries', function (Blueprint $table) {
            $table->boolean('is_active')->nullable(false)->change();
            $table->index(['is_active']);
        });
    }
}
