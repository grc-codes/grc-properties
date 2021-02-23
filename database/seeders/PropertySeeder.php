<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
use Carbon\Carbon;

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
            'floors' => rand(1,4),
            'units_per_floor' => 20,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('properties')->insert([
            'property_name' => 'Bronx',
            'property_abbreviation' => 'BRX',
            'property_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur at suscipit! Accusantium voluptatum, aperiam illo consequatur, aliquam perspiciatis adipisci modi labore cumque eos exercitationem, recusandae similique. Velit, exercitationem doloremque?',
            'image_url' => '/img/properties/bronx.jpg',
            'floors' => rand(1,4),
            'units_per_floor' => 20,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('properties')->insert([
            'property_name' => 'Queens',
            'property_abbreviation' => 'QUE',
            'property_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur at suscipit! Accusantium voluptatum, aperiam illo consequatur, aliquam perspiciatis adipisci modi labore cumque eos exercitationem, recusandae similique. Velit, exercitationem doloremque?',
            'image_url' => '/img/properties/queens.jpg',
            'floors' => rand(1,4),
            'units_per_floor' => 20,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('properties')->insert([
            'property_name' => 'Brooklyn',
            'property_abbreviation' => 'BRK',
            'property_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur at suscipit! Accusantium voluptatum, aperiam illo consequatur, aliquam perspiciatis adipisci modi labore cumque eos exercitationem, recusandae similique. Velit, exercitationem doloremque?',
            'image_url' => '/img/properties/brooklyn.jpg',
            'floors' => rand(1,4),
            'units_per_floor' => 20,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);

        DB::table('properties')->insert([
            'property_name' => 'Staten Island',
            'property_abbreviation' => 'STI',
            'property_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur aspernatur at suscipit! Accusantium voluptatum, aperiam illo consequatur, aliquam perspiciatis adipisci modi labore cumque eos exercitationem, recusandae similique. Velit, exercitationem doloremque?',
            'image_url' => '/img/properties/staten_island.jpg',
            'floors' => rand(1,4),
            'units_per_floor' => 20,
            'updated_at' => Carbon::now(),
            'created_at' => Carbon::now()
        ]);
    }
}
