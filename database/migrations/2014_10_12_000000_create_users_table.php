<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('login')->unique();
            $table->string('email')->nullable();
            $table->string('password');
            $table->date('date_naissance');
            $table->enum('sexe', array('F','M'));
            $table->rememberToken();

            $table->integer('equipage_id')->unsigned()->nullable();
            $table->foreign('equipage_id')->references('id')->on('equipage');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
