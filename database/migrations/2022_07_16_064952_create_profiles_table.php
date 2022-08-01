<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_general_ci';

            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedInteger('country_id')->nullable();
            $table->unsignedInteger('language_id')->nullable();
            $table->unsignedTinyInteger('gender_id')->nullable();

            // $table->foreignId('user_id')->references('id')
            // ->on('users')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');

            // $table->foreignId('country_id')->references('id')
            // ->on('countries')
            // ->onUpdate('cascade')
            //     ->onDelete('cascade');

            // $table->foreignId('language_id')->references('id')
            // ->on('languages')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');

            // $table->foreignId('gender_id')->references('id')
            // ->on('genders')
            // ->onUpdate('cascade')
            // ->onDelete('cascade');

            $table->string('full_name')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->text('bio')->nullable();
            $table->text('quotes')->nullable();
            $table->string('birthday')->nullable();
            $table->string('avatar')->default('default.webp');
            $table->string('facebook')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->string('website')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreign('language_id')
                ->references('id')
                ->on('languages')
                ->onUpdate('cascade')
                ->onDelete('set null');

            $table->foreign('gender_id')
                ->references('id')
                ->on('genders')
                ->onUpdate('cascade')
                ->onDelete('set null');

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
        Schema::dropIfExists('profiles');

        //the drop forekey id
        Schema::table('profiles', function (Blueprint $table) {
            //the drop Foreing key
            $table->dropForeign('profiles_user_id_foreign');
            $table->dropForeign('profiles_country_id_foreign');
            $table->dropForeign('profiles_language_id_foreign');
            $table->dropForeign('profiles_genders_id_foreign');
        });
    }
}
