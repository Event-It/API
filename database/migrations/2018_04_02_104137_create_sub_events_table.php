<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_events', function (Blueprint $table) {
          $table->increments('sub_id');
        //  $table->primary('sub_id');
          $table->integer('sub_event_id');
          $table->integer('event_id')->unsigned();
          $table->foreign('event_id')->references('event_id')->on('events')->onDelete('cascade');
          $table->unique(['sub_event_id','event_id']);
          $table->string('sub_event_name',50);
          $table->dateTime('sub_event_start_time');
          $table->dateTime('sub_event_end_time');
          $table->string('sub_event_venue',40);
          $table->text('sub_event_thumbnail_photo');
          $table->text('sub_event_banner_photo');
          $table->integer('sub_event_security_option');
          $table->boolean('sub_event_is_active');
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
        Schema::dropIfExists('sub_events');
    }
}
