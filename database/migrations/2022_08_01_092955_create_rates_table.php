<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('recipes_id');
            $table->foreign('recipes_id')
                ->references('id')
                ->on('recipes')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->integer('vote_1');
            $table->integer('vote_2');
            $table->integer('vote_3');
            $table->integer('vote_4');
            $table->integer('vote_5');
            $table->integer('average_rating');
            $table->integer('rating_count'); //Amount Of Votes

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
        Schema::dropIfExists('rates');
    }
}
