<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubeventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subevents', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('event_id')->unsigned();
             $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
             $table->integer('eventtype_id')->unsigned();
             $table->foreign('eventtype_id')->references('id')->on('eventtypes')->onDelete('cascade');
             $table->string('subevent_name',50);
             $table->dateTime('subevent_start_time');
             $table->dateTime('subevent_end_time');
             $table->timestamps();
             $table->string('subevent_venue',40);
             $table->text('subevent_thumbnail_photo')->nullable();
             $table->text('subevent_banner_photo')->nullable();
             $table->boolean('subevent_security_option')->default(0);
             $table->boolean('subevent_is_active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subevents');
    }
}
