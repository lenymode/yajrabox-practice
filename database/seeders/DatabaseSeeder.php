<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(12,000) as $key => $value) {
            DB::table('blogs')->insert([
                'title' =>$faker->text,
                'slug' =>$faker->slug,
                'keyword' =>$faker->text,
                'description' =>$faker->text,
                'content' =>$faker->paragraph,
            ]);
        }
    }
}
