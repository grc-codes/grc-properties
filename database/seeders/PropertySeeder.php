<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('properties')->insert([
            'property_name' => 'Manhattan',
            'property_abbreviation' => 'MAN',
            'property_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur at suscipit! Accusantium voluptatum, aperiam illo consequatur, aliquam perspiciatis adipisci modi labore cumque eos exercitationem, recusandae similique. Velit, exercitationem doloremque?',
            'image_url' => '/img/properties/manhattan.jpg',
            'floors' => 3,
            'units_per_floor' => 20
        ]);
    }
}
