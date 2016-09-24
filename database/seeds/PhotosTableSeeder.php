<?php


use App\Photos;
use Illuminate\Database\Seeder;


class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
         foreach(range(51,100) as $index)
         {
             Photos::create([
                 'title' => $faker->sentence(2),
                 'description' => $faker->sentence(4),
//                 'location' => $faker->sentence(5),
            ]);
         }
    }
}
