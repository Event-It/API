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
            $table->increments('id');
            $table->integer('eventtype_id')->unsigned();
            $table->foreign('eventtype_id')->references('id')->on('eventtypes')->onDelete('cascade');
            $table->string('event_name',50);
            $table->dateTime('event_start_time');
            $table->dateTime('event_end_time');
            $table->string('event_country',30)->default('India');
            $table->string('event_venue',50);
            $table->string('event_city',30);
            $table->string('event_video_link')->nullable();
            $table->string('event_website')->nullable();
            $table->text('event_thumbnail_photo')->nullable();
            $table->text('event_banner_photo')->nullable();
            $table->boolean('event_status')->nullable();
            $table->boolean('event_security_option')->nullable();
            $table->boolean('event_has_sub_event')->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->boolean('event_is_active')->default(1);
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
