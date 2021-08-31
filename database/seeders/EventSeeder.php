<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('events')->insert([

            'title' => 'flood',
            'description' => 'lorem ipsum lorem ipsum ',
            'poster' =>'',
            'date' =>'10/09/2021'


        ]);

    }
}
