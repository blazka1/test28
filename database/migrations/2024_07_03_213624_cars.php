<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_brand_id');
            $table->foreign('car_brand_id')->references('id')->on('car_brands')->onDelete('cascade');
            $table->unsignedBigInteger('car_model_id');
            $table->foreign('car_model_id')->references('id')->on('car_models')->onDelete('cascade');
            $table->integer('year')->nullable();
            $table->integer('mileage')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
