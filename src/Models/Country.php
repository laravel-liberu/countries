<?php

namespace LaravelLiberu\Countries\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelLiberu\DynamicMethods\Traits\Relations;
use LaravelLiberu\Helpers\Traits\ActiveState;
use LaravelLiberu\Helpers\Traits\AvoidsDeletionConflicts;
use LaravelLiberu\Rememberable\Traits\Rememberable;

class Country extends Model
{
    use ActiveState, AvoidsDeletionConflicts, HasFactory, Relations, Rememberable;

    protected $guarded = ['id'];

    protected $rememberableKeys = ['id', 'iso_3166_2', 'name'];

    public function regionLabel(): string
    {
        return match ($this->name) {
            'Romania' => __('County'),
            'United States' => __('State'),
            default => __('Region'),
        };
    }
}
