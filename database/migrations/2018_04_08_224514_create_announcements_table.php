<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('event_id')->unsigned();
           $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
           $table->string('announcement_heading');
           $table->text('announcement_text');
           $table->boolean('announcement_is_active');
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
        Schema::dropIfExists('announcements');
    }
}
