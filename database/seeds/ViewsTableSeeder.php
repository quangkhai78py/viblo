<?php

use Illuminate\Database\Seeder;
use App\Models\Views;

class ViewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Views::firstOrCreate([
            'view' => 4,
            // 'post_id' => 3,
            // 'question_id' => 3,
        ]);
    }
}
