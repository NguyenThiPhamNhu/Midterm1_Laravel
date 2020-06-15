<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0;$i<10;$i++){
            
        DB::table('hotels')->insert(
            [
                'name' => Str::random(10),
                'image' => 'public/hotel.jpeg',
                'typeroom' => Str::random(10),
                'area' => Str::random(10),
                'number' => Str::random(10).'Phong',
                'price' => STr::random(10),
          
            
        ]);
            }
    }
}
