<?php

namespace LaravelEnso\Countries\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelEnso\DynamicMethods\Traits\Relations;
use LaravelEnso\Helpers\Traits\ActiveState;
use LaravelEnso\Helpers\Traits\AvoidsDeletionConflicts;
use LaravelEnso\Rememberable\Traits\Rememberable;

class Country extends Model
{
    use ActiveState, AvoidsDeletionConflicts, HasFactory, Relations, Rememberable;

    protected $guarded = ['id'];

    protected $rememberableKeys = ['id', 'iso_3166_2'];

    public function regionLabel(): string
    {
        switch ($this->id) {
            case 184:
                return 'County';
            case 240:
                return 'State';
            default:
                return 'Region';
        }
    }
}
