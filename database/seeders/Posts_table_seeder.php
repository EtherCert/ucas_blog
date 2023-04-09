<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class Posts_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 100; $i++){
            Post::create([
            'title' => 'post '.$i,
            'details' => 'posts_details '.$i,
            'user_id' => User::all()->random()->id, 
            'category_id' => null,
            ]);
          } 
    }
}
