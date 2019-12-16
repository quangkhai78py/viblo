<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tag__series', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('series_id')->unsigned()->nullable();
            $table->integer('tag_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('tag__series', function($table) {
            $table->foreign('series_id')->references('id')->on('series');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tag__series');
    }
}
