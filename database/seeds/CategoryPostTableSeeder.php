<?php

use App\Category;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Post;
use Illuminate\Support\Str;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //£ prendere tutti gli id disponibili in categories e post
        $category_ids = Category::pluck('id')->toArray();
        $posts = Post::all();

        foreach ($posts as $post) {
            $post->categories()->sync($faker->randomElements($category_ids,2));
        }
    }
}
