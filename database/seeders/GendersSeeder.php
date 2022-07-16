<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // static data cuisines
        DB::table('genders')->insert([
            ['name'=>'Male'],
            ['name'=>'Fimale'],

        ]);
    }
}
