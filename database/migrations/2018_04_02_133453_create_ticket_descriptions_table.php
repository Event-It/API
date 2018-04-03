<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_descriptions', function (Blueprint $table) {
            $table->increments('ticket_desc_id');
          //  $table->primary('ticket_desc_id');
            $table->integer('sub_id')->unsigned();
            $table->foreign('sub_id')->references('sub_id')->on('sub_events')->onDelete('cascade');
            $table->string('ticket_type');
            $table->integer('ticket_price');
            $table->integer('available_tickets');
            $table->integer('sold_tickets');
            $table->boolean('ticket_desc_is_active');
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
        Schema::dropIfExists('ticket_descriptions');
    }
}
