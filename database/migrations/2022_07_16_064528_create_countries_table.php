<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            $table->id();
            //$table->string('slug')->nullable()->unique()->comment('foreign key tables users');
            $table->string('iso')->nullable()->comment('foreign key tables users');
            $table->string('name')->nullable()->comment('foreign key tables users');
            $table->string('nicename')->nullable()->comment('foreign key tables users');
            $table->string('iso3')->nullable()->comment('foreign key tables users');
            $table->string('numbercode')->nullable()->comment('foreign key tables users');
            $table->string('phonecode')->nullable()->comment('foreign key tables users');
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
        Schema::dropIfExists('countries');
    }
}
