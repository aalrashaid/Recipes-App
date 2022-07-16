<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            //$table->comment('Business calculations');
            $table->id();
            $table->string('name')->nullable()->comment('foreign key tables users');
            //  $table->string('slug')->nullable()->comment('foreign key tables users');
            $table->string('slug')->nullable()->unique()->comment('foreign key tables users');
            $table->text('description')->nullable()->comment('foreign key tables users');
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
        Schema::dropIfExists('categories');
    }
}
