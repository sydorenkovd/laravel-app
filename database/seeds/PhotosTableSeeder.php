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
        Photos::create([
            'title' => 'San Juan Vacation',
            'description' => 'Things to do before we leave for Puerto Rico!'
        ]);
    }
}
