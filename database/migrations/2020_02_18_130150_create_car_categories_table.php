<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //['Mini','Mini Elite','Economy','Economy Elite','Compact','Compact Elite','Intermediate','Intermediate Elite','Standard','Standard Elite','Fullsize','Fullsize Elite','Premium','Premium Elite','Luxury','Luxury Elite','Oversize','Special']
        //['2-3 Door','2/4 Door','4-5 Door','Wagon/Estate','Passenger Van','Limousine/Sedan','Sport','Convertible','SUV','Open Air All Terrain','Special','Pick up (single/extended cab) 2 door','Pick up (double cab) 4 door','Special Offer Car','Coupe','Monospace','Recreational Vehicle','Motor Home','2-Wheel Vehicle','Roadster','Crossover','Commercial Van/Truck']
        //['Manual Unspecified Drive','Manual 4WD','Manual AWD','Auto Unspecified Drive','Auto 4WD','Auto AWD']
        //['Unspecified Fuel/Power With Air','Unspecified Fuel/Power Without Air','Diesel Air','Diesel No Air','Hybrid Air','Hybrid Plug in Air','Electric (Distance < 250mi/400km) Air','Electric Plus (Distance ≥ 250mi/400km) Air','LPG/Compressed Gas Air','LPG/Compressed Gas No Air','Hydrogen Air','Hydrogen No Air','Multi Fuel/Power Air','Multi fuel/power No Air','Petrol Air','Petrol No Air','Ethanol Air','Ethanol No Air']
        Schema::create('car_categories', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('name');
            $table->string('class_code');
            $table->enum('class_category',['M','N','E','H','C','D','I','J','S','R','F','G','P','U','L','W','O','X']);
            $table->enum('class_type',['B','C','D','W','V','L','S','T','F','J','X','P','Q','Z','E','M','R','H','Y','N','G','K']);
            $table->enum('transmission',['M','N','C','A','B','D']);
            $table->enum('fuel_ac',['R','N','D','Q','H','I','E','C','L','S','A','B','M','F','V','Z','U','X']);
            $table->integer('passengers')->default(0);
            $table->longText('description');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_categories');
    }
}
