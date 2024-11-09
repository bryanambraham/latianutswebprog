<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        $specialization = ['Spesialis Data Science', 'Spesialist Network Security'];
        foreach(range(1, 10) as $index){
            Writer::create([
                'name'=> $faker->name,
                'specialization' => $faker->randomElement($specialization),
                'photo' =>  $faker->imgURL(200,200,'people'),
            ]);
        }
    }
}
