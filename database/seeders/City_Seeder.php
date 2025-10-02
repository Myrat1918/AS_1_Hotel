<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class City_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Cities = [
            "Asgabat",
            "Turkmenbasy",
            "Turkmenabat",
            "Arkadag",
            "Mary",
            "Dashoguz",
            "Anew"
        ];

        foreach($Cities as $city){
            City::create([
                "name"=> $city,
            ]);
        }
    }
}
