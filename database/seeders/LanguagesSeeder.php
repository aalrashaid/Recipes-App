<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // static data languages
        DB::table('languages')->insert([
            ['name'=>'English','iso_639-1'=>'en','created_at' => Carbon::now(),'updated_at' =>Carbon::now()],
            ['name'=>'Arabic','iso_639-1'=>'ar','created_at' => Carbon::now(),'updated_at' =>Carbon::now()],
            ['name'=>'French','iso_639-1'=>'fr','created_at' => Carbon::now(),'updated_at' =>Carbon::now()],
            ['name'=>'Spanish','iso_639-1'=>'es','created_at' => Carbon::now(),'updated_at' =>Carbon::now()],
            ['name'=>'Japanese','iso_639-1'=>'ja','created_at' => Carbon::now(),'updated_at' =>Carbon::now()],
        ]);
    }
}
