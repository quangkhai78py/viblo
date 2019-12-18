<?php

use Illuminate\Database\Seeder;
use App\Models\User_Organization;

class User_OrganizationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User_Organization::firstOrCreate([
            // 'user_id' => 4,
            // 'organization' => 5,
        ]);
    }
}
