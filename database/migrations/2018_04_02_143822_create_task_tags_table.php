<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_tags', function (Blueprint $table) {
            $table->increments('task_tag_id');
            //$table->primary('task_tag_id');
            $table->string('task_tag_name');
            $table->integer('event_id')->unsigned();
            $table->foreign('event_id')->references('event_id')->on('events')->onDelete('cascade');
            $table->boolean('task_tag_is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('task_tags');
    }
}
