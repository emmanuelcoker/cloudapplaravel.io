<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();

            $table->unsignedBigInteger('role_id')->default(1);
            $table->foreign('role_id')->on('roles')->references('id');
            
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('clientID')->unique()->nullable();

            $table->unsignedBigInteger('country_id')->default(1);
            $table->foreign('country_id')->on('countries')->references('id');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('dark_mode')->default(false);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
