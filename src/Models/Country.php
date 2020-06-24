<?php

namespace LaravelEnso\Countries\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\DynamicMethods\Traits\Relations;
use LaravelEnso\Helpers\Traits\AvoidsDeletionConflicts;
use LaravelEnso\Rememberable\Traits\Rememberable;

class Country extends Model
{
    use AvoidsDeletionConflicts, Relations, Rememberable;

    protected $guarded = ['id'];

    public function regionLabel(): string
    {
        switch ($this->id) {
            case 184: return 'County';
            case 240: return 'State';
            default: return 'Region';
        }
    }
}
