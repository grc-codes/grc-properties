<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
use Carbon\Carbon;
use App\Models\Property;


class FloorSeeder extends Seeder
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
            $floors = $property->floors;
            $units = $property->units_per_floor;
            foreach(range(1, $floors) as $idx) {
                DB::table('floors')->insert([
                    'property_id' => $property->id,
                    'floor_num' => $idx,
                    'num_of_units' => $units,
                    'prefix' => $property->property_prefix,
                    'updated_at' => Carbon::now(),
                    'created_at' => Carbon::now()
                ]);
            }
        }
    }
}
