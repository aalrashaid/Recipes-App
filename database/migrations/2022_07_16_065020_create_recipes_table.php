<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->id();

            //$table->unsignedBigInteger('user_ID')->unsigned();
            $table->foreignId('user_id')->references('id')->on('users')->comment('foreign key tables users');

            //$table->unsignedBigInteger('category_id')->unsigned();
            $table->foreignId('category_id')->references('id')->on('categories')->comment('foreign key tables categories');

            //$table->unsignedBigInteger('cuisines_id')->unsigned();
            $table->foreignId('cuisines_id')->references('id')->on('cuisines')->comment('foreign key tables cuisines');

            // $table->unsignedBigInteger('thumbnail_id')->unsigned();
            $table->foreignId('thumbnail_id')->references('id')->on('thumbnails')->comment('foreign key tables photos');

            $table->string('title')->nullable()->comment('foreign key tables users');
            $table->string('slug')->nullable()->unique()->comment('foreign key tables users');
            $table->text('dsescription')->nullable()->comment('foreign key tables users');
            $table->string('youtubevideo')->nullable()->comment('foreign key tables users');
            $table->string('method')->nullable()->comment('foreign key tables users');
            $table->string('difficlty')->nullable()->comment('foreign key tables users');
            $table->string('preptime')->nullable()->comment('foreign key tables users');
            $table->string('cooktime')->nullable()->comment('foreign key tables users');
            $table->string('total')->nullable()->comment('foreign key tables users');
            $table->string('servings')->nullable()->comment('foreign key tables users');
            $table->string('yield')->nullable()->comment('foreign key tables users');
            $table->text('ingredients')->nullable()->comment('foreign key tables users');
            $table->text('directions')->nullable()->comment('foreign key tables users');
            $table->text('nutritionFacts')->nullable()->comment('foreign key tables users');
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
        Schema::dropIfExists('recipes');

        //the drop forekey id
        Schema::table('recipes', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('recipes_user_id_foreign');
            $table->dropForeign('recipes_cuisines_id_foreign');
            $table->dropForeign('recipes_category_id_foreign');
            $table->dropForeign('recipes_thumbnail_id_foreign');
        });
    }
}
