<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) {
            $newPost= new Post();
            $newPost->title= ucfirst($faker->unique()->words(4,true));
            $newPost->author= $faker->name();
            $newPost->content = $faker->realText(400);
            $newPost->image_url = "https://picsum.photos/id/$i/450/600";
            $newPost->slug = Str::slug($newPost->title, '-')."-$i";
            $newPost->save();
        }
    }
}
