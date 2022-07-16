<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThumbnailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thumbnails', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';
            //$table->comment('Business calculations');
            $table->id();

            //$table->unsignedBigInteger('user_id')->unsigned();
            $table->foreignId('user_id')->references('id')->on('users')->comment('foreign key tables users');

            // $table->unsignedBigInteger('recipes_ID')->unsigned();
            //  $table->foreign('recipes_ID')->references('id')->on('recipes')->comment('foreign key tables users');
            // $table->string('slug')->nullable()->unique()->comment('foreign key tables users');
            $table->string('thumbnail')->nullable()->comment('foreign key tables users');
            $table->string('size')->nullable()->comment('foreign key tables users');
            $table->string('path')->nullable()->comment('foreign key tables users');
            //$table->string('images')->nullable()->comment('foreign key tables users');
            // $table->string('alt')->nullable()->comment('foreign key tables users');
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
        Schema::dropIfExists('thumbnails');

        //the drop forekey id
        Schema::table('thumbnails', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('recipes_user_id_foreign');

        });
    }
}
