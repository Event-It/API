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
        // $this->call(UsersTableSeeder::class);
      //  factory(App\Model\User::class,100)->create();
        //factory(App\Model\UserAuthentication::class,100)->create();
        factory(App\Model\EventType::class,10)->create();
    }
}
