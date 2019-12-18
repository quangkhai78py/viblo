<?php

use Illuminate\Database\Seeder;
use App\Models\Tag_Series;

class Tag_SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag_Series::firstOrCreate([
            // 'series_id' => 3,
            // 'tag_id' => 2,
        ]);
    }
}
