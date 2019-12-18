<?php

use Illuminate\Database\Seeder;
use App\Models\Follows;

class FollowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Follows::firstOrCreate([
        	// 'user_id_following'             => 4,
        	// 'user_id_follower'              => 2,
        	// 'organization_user_id_follower' => 4,      	
        ]);
    }
}
