<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $hotels = \App\Models\Hotel::factory()->count(10)->create();
        foreach($hotels as $hotel){
            $hotel->rooms()->saveMany(\App\Models\Room::factory()->count(3)->make());
        }
    }
}
