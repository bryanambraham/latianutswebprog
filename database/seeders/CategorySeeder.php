<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category; // Pastikan model Category diimpor
use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categories = ['Data Science', 'Network Security'];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
