<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
