<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketdescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketdescriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ticket_type');
            $table->integer('ticket_price');
            $table->integer('available_tickets');
            $table->integer('sold_tickets');
            $table->integer('ticketdescriptionable_id')->unsigned();
            $table->string('ticketdescriptionable_type');
            $table->boolean('ticketdescription_is_active');
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
        Schema::dropIfExists('ticketdescriptions');
    }
}
