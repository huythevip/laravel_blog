<?php

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
    	DB::table('posts')->truncate();
    	DB::table('comments')->truncate();

        factory(App\Post::class, 10)->create()->each(function($post) {
        	factory(App\Comment::class, 5)->create([
        		'post_id' => $post->id,
        	]);
        });
    }
}
