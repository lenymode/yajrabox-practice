<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,200) as $key => $value) {
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
