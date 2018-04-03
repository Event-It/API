<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('event_id');
          //  $table->primary('event_id');
            $table->integer('event_type_id')->unsigned();
            $table->foreign('event_type_id')->references('event_type_id')->on('event_types')->onDelete('cascade');
            $table->string('event_name',50);
            $table->dateTime('event_start_time');
            $table->dateTime('event_end_time');
            $table->string('event_country',20);
            $table->string('event_venue',40);
            $table->string('event_city',20);
            $table->string('event_video_link');
            $table->string('event_website');
            $table->text('event_thumbnail_photo');
            $table->text('event_banner_photo');
            $table->integer('event_status');
            $table->integer('event_security_option');
            $table->boolean('event_has_sub_event');
            $table->integer('event_organizer_id')->unsigned();
            $table->foreign('event_organizer_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->boolean('event_is_active');
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
        Schema::dropIfExists('events');
    }
}
