<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('ticket_number');
          //  $table->primary('ticket_number');
            $table->integer('ticket_desc_id')->unsigned();
            $table->foreign('ticket_desc_id')->references('ticket_desc_id')->on('ticket_descriptions')->onDelete('cascade');
            $table->integer('ticket_buyer_id')->unsigned();
            $table->foreign('ticket_buyer_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->integer('ticket_quantity');
            $table->boolean('booking_is_active');
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
        Schema::dropIfExists('bookings');
    }
}
