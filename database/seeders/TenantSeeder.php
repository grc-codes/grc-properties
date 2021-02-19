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

    public function loader($unitId,$tenantId) {
        $faker = Faker::create();
        DB::table('tenants')->insert([
            'first_name' => $faker->firstName,
            'last_name' => $faker->lastName,
            'email' => $faker->email,
            'phone_number' => $faker->phoneNumber,
            'monthly_salary' => rand(2500,6000),
            'unit_id' =>  $unitId
        ]);
        DB::table('units')->updateOrInsert(
            ['id' => $unitId],
            ['tenant_id' => $tenantId]
        );
    }

    public function run()
    {
        foreach(range(1,20) as $idx){
            $total_units = Unit::all()->count();
            $rand_num = rand(1,$total_units);
            $selected_unit = Unit::find($rand_num);
            if($selected_unit->tenant_id == null) {
                $this->loader($rand_num,$idx);
            } else {
                $rand_num = rand(1,$total_units);
                $selected_unit = Unit::find($rand_num);
                $this->loader($rand_num,$idx);
            }
        }
    }
}
