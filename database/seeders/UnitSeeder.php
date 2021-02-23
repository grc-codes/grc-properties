<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Property;


class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = Property::all();
        foreach($properties as $property) {
            $units_building = $property->floors * $property->units_per_floor;
            foreach(range(1, $units_building) as $idx) {
                DB::table('units')->insert([
                    'property_id' => $property->id,
                    'beds' => rand(0,4),
                    'baths' => rand(1,2),
                    'rent_price' => rand(1000,1600),
                    'unit_prefix' => $property->property_abbreviation
                ]);
            }
        }
    }
}