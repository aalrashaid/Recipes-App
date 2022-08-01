<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            
            //comment('foreign key tables users')
            // we are later of row & nullable

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

            // $table->foreignId('user_id')->references('id')
            //     ->on('users')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');
            // $table->foreignId('recipes_id')->references('id')
            //     ->on('recipes')
            //     ->onUpdate('cascade')
            //     ->onDelete('cascade');

            //$table->unsignedTinyInteger('id', true);

            $table->unsignedBigInteger('reply_id')->nullable();
            $table->text('comments')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');

        //the drop forekey id
        Schema::table('reviews', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('recipes_user_id_foreign');
            $table->dropForeign('recipes_recipes_id_foreign');
            // $table->dropForeign('recipes_category_id_foreign');
            // $table->dropForeign('recipes_thumbnail_id_foreign');
        });
    }
}
