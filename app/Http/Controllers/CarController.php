<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Resources\CarResource;

class CarController extends Controller
{
    public function index()
    {
        return CarResource::collection(Car::all());
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return new CarResource($car);
    }

    public function store(Request $request)
    {
        $car = Car::create([
            'car_brand_id' => $request->car_brand_id,
            'car_model_id' => $request->car_model_id,
            'year' => $request->year,
            'mileage' => $request->mileage,
            'color' => $request->color,
        ]);

        return new CarResource($car);
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update([
            'car_brand_id' => $request->car_brand_id,
            'car_model_id' => $request->car_model_id,
            'year' => $request->year,
            'mileage' => $request->mileage,
            'color' => $request->color,
        ]);

        return new CarResource($car);
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return response()->json(['message' => 'Car deleted successfully']);
    }
}
