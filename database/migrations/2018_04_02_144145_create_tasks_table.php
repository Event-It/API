<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('task_id');
          //  $table->primary('task_id');
            $table->string('task_heading');
            $table->integer('task_tag_id')->unsigned();
            $table->foreign('task_tag_id')->references('task_tag_id')->on('task_tags')->onDelete('cascade');
            $table->text('task_description');
            $table->dateTime('task_due_date');
            $table->integer('task_status');
            $table->integer('task_taken_by')->unsigned();
            $table->foreign('task_taken_by')->references('user_id')->on('users')->onDelete('cascade');
            $table->integer('task_priority');
            $table->boolean('task_is_active');
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
        Schema::dropIfExists('tasks');
    }
}
