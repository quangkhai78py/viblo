<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('view', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('view')->nullable();
            $table->integer('post_id')->unsigned()->nullable();       
            $table->integer('question_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('view', function($table) {
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('view');
    }
}
