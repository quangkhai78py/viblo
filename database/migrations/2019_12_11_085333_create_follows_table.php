<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id_following')->unsigned()->nullable();
            $table->integer('user_id_follower')->unsigned()->nullable();
            $table->integer('organization_user_id_follower')->unsigned()->nullable();
            $table->integer('follow_unfollow')->nullable()->comment = '1:follow 0:unfollow';
            $table->timestamps();
        });

        Schema::table('follows', function($table) {
            $table->foreign('user_id_following')->references('id')->on('users');
            $table->foreign('user_id_follower')->references('id')->on('users');
            $table->foreign('organization_user_id_follower')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follows');
    }
}
