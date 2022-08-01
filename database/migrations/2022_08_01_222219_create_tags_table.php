<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->id();
            $table->string('name')->nullable();
            $table->timestamps();
        });

        Schema::create('reviews_tags', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->id();
            $table->unsignedBigInteger('tags_id');
            $table->foreign('tags_id')
                ->references('id')
                ->on('tags')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('recipes_id');
            $table->foreign('recipes_id')
                ->references('id')
                ->on('recipes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('tags');
        Schema::dropIfExists('reviews_tags');
    }
}
