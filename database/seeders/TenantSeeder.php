<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;
use App\Models\Unit;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        
        foreach(range(1,20) as $idx){
            $available_unit = Unit::whereNull('tenant_id')->first();
            DB::table('tenants')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'monthly_salary' => rand(2500,6000),
                'unit_id' =>  $available_unit->id
            ]);
        }
    }
}
