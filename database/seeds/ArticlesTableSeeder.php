<?php

use App\Article;
use Illuminate\Database\Seeder;
use Faker\Factory;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();
        $faker = Factory::create();

        for($i = 0; $i < 50; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        }
    }
}
