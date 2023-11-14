<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $car = new Car();
        $car->name = "Mustang";
        $car->year = 2024;
        $car->brand = "Ford";
        $car->save();
    }
}
