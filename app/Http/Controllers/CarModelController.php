<?php

namespace App\Http\Controllers;

use App\Models\CarModel;
use Illuminate\Http\Request;
use App\Http\Resources\CarModelResource;

class CarModelController extends Controller
{
    public function index()
    {
        return CarModelResource::collection(CarModel::all());
    }
}
