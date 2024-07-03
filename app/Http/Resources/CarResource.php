<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'car_brand_id' => $this->car_brand_id,
            'car_model_id' => $this->car_model_id,
            'year' => $this->year,
            'mileage' => $this->mileage,
            'color' => $this->color,
        ];
    }
}
