<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tv_id')->nullable();
            $table->string('position')->nullable();
            $table->string('title')->nullable();
            $table->string('video')->nullable();
            $table->boolean('morning')->default(true);
            $table->boolean('afternoon')->default(true);
            $table->boolean('evening')->default(true);
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('training_videos');
    }
}
