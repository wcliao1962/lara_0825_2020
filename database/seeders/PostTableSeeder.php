<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        $total=20;
        $faker=Factory::create('zh_TW');

        foreach (range(1,20) as $number) {
            Post::create([
                'title'=> $faker->sentence,
                'content'=>$faker->paragraph,
                'is_feature'=>rand(0,1),
                'created_at'=>Carbon::now()->subDays($total-$number),
                'updated_at'=>Carbon::now()->subDays($total-$number)->addHours(rand(1,24)),
            ]);
        }
    }
}
