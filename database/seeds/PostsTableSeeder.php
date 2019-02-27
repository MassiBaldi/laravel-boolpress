<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;


class PostsTableSeeder extends Seeder
{
  public function run(Faker $faker)
  {
   for ($i=0; $i < 10; $i++) {

     $newPost = new Post;

     $newPost->title = $faker->sentence(4);
     $newPost->category_id = 1;
     $newPost->author = $faker->name;
     $newPost->content = $faker->text;

     $newPost->save();

   }
  }
}
