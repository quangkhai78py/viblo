<?php

use Illuminate\Database\Seeder;
use App\Models\Comments;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comments::firstOrCreate([
        	'content_comment'     => 'Mặc định trong file này sẽ có class DatabaseSeeder có function run() call tới các seed class khác, cho phép bạn có thể control được thứ tự thêm dữ liệu theo thứ tự bạn sắp xếp.',
        // 	'user_id'               => 2,
        // 	'post_id'               => 1,
        // 	'comment_children_id'   => 1,
        // 	'question_id'           => 2,
        // 	'answer_id'             => 1,
        ]);
    }
}
