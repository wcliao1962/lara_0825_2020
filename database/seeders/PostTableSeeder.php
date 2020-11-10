<?php

namespace Database\Seeders;

use App\Models\Post;
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
        foreach (range(1,20) as $number) {
            Post::create([
                'title'=>'title'.$number,
                'content'=>'content'.$number,
            ]);
        }
    }
}
