<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PropertySeeder::class);
        $this->call(FloorSeeder::class);
        $this->call(UnitSeeder::class);
        $this->call(TenantSeeder::class);
        $this->call(SubscriptionSeeder::class);
        $this->call(MessageSeeder::class);
        $this->call(ApplicationSeeder::class);
    }
}
