<?php

use Illuminate\Database\Seeder;
use App\Models\Post_image;
class Post_imagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post_image::class, 10)->create();
    }
}
