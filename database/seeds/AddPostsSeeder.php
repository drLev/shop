<?php

use Illuminate\Database\Seeder;
use App\Post;

class AddPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = 'Заголовок поста';
//        $post->photo = 'photo{id?}';
        $post->text = 'ghkjfvkjkfgkhfgjkbnfgnjndfjkf';
//        $post->user_id = 0;
        
        
        $post->save();
    }
}
