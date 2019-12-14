<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluate', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('score')->nullable();
            $table->integer('reputation')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('post_id')->unsigned()->nullable();  
            $table->integer('question_id')->unsigned()->nullable();
            $table->integer('answer_id')->unsigned()->nullable();    
            $table->timestamps();
        });

        Schema::table('evaluate', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('posts');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('answer_id')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluate');
    }
}
