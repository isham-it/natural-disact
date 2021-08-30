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
         // Call seeders you want to execute
         $this->call(EventSeeder::class);
         $this->call(OfferSeeder::class);
         $this->call(AskSeeder::class);
    }
}
