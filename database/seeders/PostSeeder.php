<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;
use illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<30;$i++){
            $post = new Post();
            $post->title = $faker->words(3,true);
            $post->description = $faker->text(350);
            $post->owner = 'Tomas Darienko';
            $post->slug = Str::slug($post->title,'-');
            $post->save();
        }
    }
}
