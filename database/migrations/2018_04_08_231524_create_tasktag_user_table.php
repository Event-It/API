<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasktagUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasktag_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('task_heading');
            $table->integer('tasktag_id')->unsigned();
            $table->foreign('tasktag_id')->references('id')->on('tasktags')->onDelete('cascade');
            $table->text('task_description')->nullable();
            $table->dateTime('task_due_date')->nullable();
            $table->integer('task_status')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('task_priority')->nullable();
            $table->boolean('task_is_active')->default(1);
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
        Schema::dropIfExists('tasktag_user');
    }
}
