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
            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('category_id')->nullable();
            $table->unsignedBigInteger('cuisine_id')->nullable();
            $table->unsignedBigInteger('thumbnail_id')->nullable();

            $table->string('title')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->text('description')->nullable();
            $table->string('youtube_video')->nullable();
            $table->string('recipe_method')->nullable();
            $table->string('difficulty')->nullable();
            $table->string('prep_time')->nullable();
            $table->string('cook_time')->nullable();
            $table->string('total')->nullable();
            $table->string('servings')->nullable();
            $table->string('yield')->nullable();
            $table->text('ingredients')->nullable();
            $table->text('directions')->nullable();
            $table->text('nutrition_facts')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreign('cuisine_id')
                ->references('id')
                ->on('cuisines')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreign('thumbnail_id')
                ->references('id')
                ->on('thumbnails')
                ->onUpdate('cascade')
                ->onDelete('set null');
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
    }
}
