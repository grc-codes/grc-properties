<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Floor;


class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $floors = Floor::all();
        foreach($floors as $floor) {
            foreach(range(1, $floor->num_of_units) as $idx) {
                DB::table('units')->insert([
                    'property_id' => $floor->property_id,
                    'floor_id' => $floor->id,
                    'beds' => rand(0,4),
                    'baths' => rand(1,2),
                    'rent_price' => rand(1000,1600),
                    'apartment_num' => $floor->prefix . '-' . $floor->floor_num . '-' . $idx
                ]);
            }
        }
    }
}