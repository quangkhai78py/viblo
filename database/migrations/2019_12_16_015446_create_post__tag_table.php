<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post__tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('post_id')->unsigned()->nullable();
            $table->integer('tag_id')->unsigned()->nullable();
            $table->integer('category_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('post__tag', function($table) {
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('tag_id')->references('id')->on('tag');
            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post__tag');
    }
}
