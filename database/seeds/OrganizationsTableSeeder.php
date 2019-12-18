<?php

use Illuminate\Database\Seeder;
use App\Models\Organizations;

class OrganizationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Organizations::firstOrCreate([
            'name'              => 'sun',
            'tracking_id'       => 3,
            'url'               => 'https://viblo.asia/p/tim-hieu-ve-seeder-trong-laravel-bWrZn1MmKxw',
            'location'          => 'hoặc chúng ta cũng có thể tách riêng ra 1 class và sử dụng hàm hàm',
            'short_description' => 'Laravel hiện nay là một framework PHP được ưa thích nhất hiện nay và được hỗ trợ rất mạnh mẽ từ nhà phát ',
        ]);
    }
}
