<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketdescriptionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticketdescription_user', function (Blueprint $table) {
             $table->increments('id');
             $table->integer('ticketdescription_id')->unsigned();
             $table->foreign('ticketdescription_id')->references('id')->on('ticketdescriptions')->onDelete('cascade');
             $table->integer('user_id')->unsigned();
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
             $table->integer('ticket_quantity');
             $table->dateTime('ticket_purchasedate');
             $table->integer('transaction_id')->unsigned();
             $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
             $table->boolean('ticketdescription_user_is_active');
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
        Schema::dropIfExists('ticketdescription_user');
    }
}
