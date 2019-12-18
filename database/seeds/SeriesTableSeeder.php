<?php

use Illuminate\Database\Seeder;
use App\Models\Series;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Series::firstOrCreate([
        	'series_name' => 'laravel',
        ]); 
    }
}
