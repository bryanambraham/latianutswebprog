<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;
use Faker\Factory as Faker;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Ambil semua ID kategori yang ada di tabel categories
        $categoryIds = Category::pluck('id')->toArray();

        // Ambil semua ID writer yang ada di tabel writers
        $writerIds = Writer::pluck('id')->toArray();

        foreach (range(1, 10) as $index) {
            Article::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'summary' => $faker->text(250),
                'writer_id' => $faker->randomElement($writerIds), // Pilih writer_id dari ID yang ada di tabel writers
                'category_id' => $faker->randomElement($categoryIds), // Pilih category_id dari ID yang ada di tabel categories
                'published_date' => $faker->date(),
            ]);
        }
    }
}
