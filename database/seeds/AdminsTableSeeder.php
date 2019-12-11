<?php
    use Illuminate\Database\Seeder;
    use App\Models\Admin;

    class AdminsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            Admin::firstOrCreate([
                'email' => 'admin@i-mall.com',
            ], [
                'name' => 'Admin',
                'email' => 'admin@i-mall.com',
                'password' => bcrypt('Abcd0168!@#$'),
            ]);
        }
    }


?>