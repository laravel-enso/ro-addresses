<?php

namespace LaravelEnso\RoAddresses\App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Option extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'label' => $this->whenRelationsLoaded()
                ? $this->label
                : '',
        ];
    }

    private function whenRelationsLoaded()
    {
        return $this->relationLoaded('country')
            && $this->relationLoaded('county')
            && $this->relationLoaded('locality');
    }
}
