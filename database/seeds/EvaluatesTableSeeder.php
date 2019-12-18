<?php

use Illuminate\Database\Seeder;
use App\Models\Evaluates;

class EvaluatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Evaluates::firstOrCreate([
        	'score'         => 3,
        	'reputation'    => 10,
        	// 'user_id'       => 2,
        	// 'post_id'       => 3,
        	// 'question_id'   => 2,
        	// 'answer_id'     => 5,
        ]);
    }
}
