<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // static data countries
        DB::table('countries')->insert([
            //['iso'=>'','name'=>'','nicename'=>'','iso3'=>'','numbercode'=>'','phonecode'=>'','created_at' => Carbon::now(),'updated_at' =>Carbon::now()],
            ['iso'=>'JP','name'=>'JAPAN','nicename'=>'Japan','iso3'=>'JPN','numbercode'=>'392','phonecode'=>'81','created_at' => Carbon::now(),'updated_at' =>Carbon::now()],
            ['iso'=>'US','name'=>'UNITED STATES','nicename'=>'United States','iso3'=>'USA','numbercode'=>'840','phonecode'=>'1','created_at' => Carbon::now(),'updated_at' =>Carbon::now()],
            ['iso'=>'GB','name'=>'UNITED KINGDOM','nicename'=>'United Kingdom','iso3'=>'GBR','numbercode'=>'826','phonecode'=>'44','created_at' => Carbon::now(),'updated_at' =>Carbon::now()],
            ['iso'=>'KW','name'=>'KUWAIT','nicename'=>'Kuwait','iso3'=>'KWT','numbercode'=>'414','phonecode'=>'965','created_at' => Carbon::now(),'updated_at' =>Carbon::now()],
        ]);

    }
}
