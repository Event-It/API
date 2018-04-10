<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(App\user::class,100)->create();
        //factory(App\eventtype::class,10)->create();
        //factory(App\event::class,150)->create();
       //factory(App\subevent::class,300)->create();
       //factory(App\ticketdescription::class,250)->create(); //for event data
       //factory(App\ticketdescription::class,200)->create(); //for subevent data
       //factory(App\tasktag::class,100)->create();
       //factory(App\transaction::class,150)->create();
       //factory(App\announcement::class,100)->create();
       //factory(App\checkin::class,150)->create();
       factory(App\checkout::class,150)->create();
    }
}
