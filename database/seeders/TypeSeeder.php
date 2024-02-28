<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Type;
use Illuminate\Support\Str;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for($i=0; $i<30; $i++){

        $type = new Type();
        $type->name = $faker->word();
        $type->slug= Str::slug($type->name,'-');
        
        $type->save();
       }
    }
}
