<?php

use Illuminate\Database\Seeder;

class ImageAlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ImageAlbum::class, 100)->create();
    }
}
