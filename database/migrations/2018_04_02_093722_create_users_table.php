<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('user_id');
          //  $table->primary('user_id');
            $table->string('user_first_name',20);
            $table->string('user_last_name',20);
            $table->string('user_phone_number',10);
            $table->string('user_aadhar_card_number',12);
            $table->text('user_profile_picture');
            $table->text('user_about');
            $table->string('user_residence');
            $table->string('user_city',20);
            $table->string('user_country',20);
            $table->boolean('user_is_active');
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
        Schema::dropIfExists('users');
    }
}
