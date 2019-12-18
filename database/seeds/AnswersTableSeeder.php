<?php

use Illuminate\Database\Seeder;
use App\Models\Answers;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answers::firstOrCreate([
      		'content_answer'    => 'Có rất nhiều cách để thêm dữ liệu bằng seeder , sau đây mình xin giới thiệu về một trong những cách đó.',
            // 'question_id'       => 1,
            // 'user_id'           => 2,
        ]);
    }
}
