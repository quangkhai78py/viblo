<?php

use Illuminate\Database\Seeder;
use App\Models\Questions;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Questions::firstOrCreate([
            'title'             => 'Viết thẳng trong file DataTableSeeder.php',
            'content_question'  => 'Mặc định trong file này sẽ có class DatabaseSeeder có function run() call tới các seed class khác, cho phép bạn có thể control được thứ tự thêm dữ liệu theo thứ tự bạn sắp xếp.',
            // 'user_id'           => 3,
        ]);
    }
}
