<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('runners', function (Blueprint $table) {
            $table->increments ('runID');
            $table->string ('user_fullname');
            $table->string ('user_email');
            $table->string ('user_password');

            $table->enum ('run_age',['Yes', 'No']);
            $table->enum ('run_lang', ['English', 'Malay']);
            $table->enum ('run_citizen', ['Malaysian', 'Non-Malaysian']);
            $table-> enum ('run_license', ['Yes', 'No']);
            $table-> enum ('run_agree', ['Yes']);

            $table->string ('user_type')->default('Runner');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('runners');
    }
}
