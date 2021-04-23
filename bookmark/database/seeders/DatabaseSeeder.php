<?php

namespace Database\Seeders;

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
        $this->call(AuthorsTableSeeder::class); //invoke first
        $this->call(BooksTableSeeder::class); //needs author data
        $this->call(UsersTableSeeder::class);
    }
}