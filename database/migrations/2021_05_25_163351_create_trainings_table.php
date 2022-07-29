<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tv_id')->nullable;
            $table->string('name')->nullable();
            $table->time('start')->nullable();
            $table->time('end')->nullable();
            $table->boolean('mon')->default(false);
            $table->boolean('tue')->default(false);
            $table->boolean('wed')->default(false);
            $table->boolean('thurs')->default(false);
            $table->boolean('fri')->default(false);
            $table->boolean('sat')->default(false);
            $table->boolean('sun')->default(false);
            $table->boolean('is_active')->default(false);
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
        Schema::dropIfExists('trainings');
    }
}
