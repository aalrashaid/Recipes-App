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
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_unicode_ci';

            $table->id();

            //$table->unsignedBigInteger('user_id')->unsigned()->nullable()->default(null);
            $table->foreignId('user_id')->references('id')->on('users')->comment('foreign key tables users');

            //$table->unsignedBigInteger('country_id')->nullable()->comment('foreign key tables users');
            $table->foreignId('country_id')->references('id')->on('countries')->comment('foreign key tables users');

            //$table->unsignedBigInteger('language_id')->nullable()->comment('foreign key tables users');
            $table->foreignId('language_id')->references('id')->on('languages')->comment('foreign key tables users');

            $table->foreignId('genders_id')->references('id')->on('genders')->comment('foreign key tables users');

            $table->string('fullName')->nullable()->comment('foreign key tables users');
            $table->string('slug')->nullable()->unique()->comment('foreign key tables users');
            $table->text('bio')->nullable()->comment('foreign key tables users');
            $table->text('quotes')->nullable()->comment('foreign key tables users');
            $table->string('birthday')->nullable()->comment('foreign key tables users');
            //$table->string('gender')->nullable()->comment('foreign key tables users');
            $table->string('avatar')->default('user.png')->comment('foreign key tables users');


            $table->string('facebook')->nullable()->comment('foreign key tables users');
            $table->string('linkedIn')->nullable()->comment('foreign key tables users');
            $table->string('instagram')->nullable()->comment('foreign key tables users');
            $table->string('youtube')->nullable()->comment('foreign key tables users');
            $table->string('website')->nullable()->comment('foreign key tables users');

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
