<?php

namespace App\Http\Controllers;

use App\Models\CarBrand;
use Illuminate\Http\Request;
use App\Http\Resources\CarBrandResource;

class CarBrandController extends Controller
{
    public function index()
    {
        return CarBrandResource::collection(CarBrand::all());
    }
}
