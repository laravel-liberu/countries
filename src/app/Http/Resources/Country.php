<?php

namespace LaravelEnso\Countries\App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Country extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'currencyCode' => $this->currency_code,
        ];
    }
}
