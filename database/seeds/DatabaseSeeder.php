<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Factory('App\Page',3)->create();
        Factory('App\Comment',1)->create();
        Factory('App\User',3)->create();
    }
}
