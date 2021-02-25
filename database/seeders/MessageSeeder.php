<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Faker\Factory as Faker;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $how_did_you_hear_options = [
            '',
            'drive-by',
            'craigslist',
            'friend',
            'google',
            'zillowdotcom',
            'truliadotcom',
            'apartmentsdotcom',
            'facebook',
            'instagram',
            'other'
        ];
        $move_date_options = [
            '',
            'lessthan2wks',
            '2wksto4wks',
            '1moto3mo',
            '3moto6mo',
            'other'
        ];
        $budget_options = [
            '',
            '800to900',
            '900to1000',
            '1000to1300',
            '1300plus',
            'other'
        ];
        $room_options = [
            '',
            'studio',
            'onebed',
            'twobed',
            'threebed'
        ];
        $pet_options = [
            '',
            'yes',
            'no'
        ];
        $building_options = [
            '',
            'unsure',
            'manhattan',
            'bronx',
            'queens',
            'long_island',
            'brooklyn'
        ];
        $tour_options = [
            '',
            'virtual',
            'inperson'
        ];

        foreach(range(1,50) as $idx){
            DB::table('messages')->insert([
                'name' => $faker->firstName . ' ' . $faker->lastName,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'how_did_you_hear' => $how_did_you_hear_options[rand(0, count($how_did_you_hear_options) - 1)],
                'moving_date' => $move_date_options[rand(0, count($move_date_options) - 1)],
                'budget' => $budget_options[rand(0, count($budget_options) - 1)],
                'rooms' => $room_options[rand(0, count($room_options) - 1)],
                'pets' => $pet_options[rand(0, count($pet_options) - 1)],
                'building' => $building_options[rand(0, count($building_options) - 1)],
                'tour' => $tour_options[rand(0, count($tour_options) - 1)],
                'comments' => $faker->text($maxNbChars = 200),
                'updated_at' => Carbon::now(),
                'created_at' => Carbon::now()
            ]);
        }
    }
}
