<?php

use Illuminate\Database\Seeder;
use App\Models\Posts;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Posts::firstOrCreate([
            'title' => 'Làm như thế nào để tạo một RESTful API bằng laravel',
            'content' => 'Laravel hiện nay là một framework PHP được ưa thích nhất hiện nay và được hỗ trợ rất mạnh mẽ từ nhà phát triển. Laravel được xây dựng trên một cơ sở vững chắc là Symfony nhưng lại được tích hợp thêm rất nhiều thành phần mạnh mẽ như "templating engine, ORM, command line Artisan".',
            // 'category_id' => 3,
            // 'user_id' => 2,
            // 'series' => 3,
            // 'organizarion_id' => 4,
        ]);
    }
}
