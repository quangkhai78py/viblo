<?php

use Illuminate\Database\Seeder;
use App\Models\Post_Tag;

class Post_TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Post_Tag::firstOrCreate([
            // 'post_id' => 4,
            // 'tag_id' => 2,
        ]);
    }
}
