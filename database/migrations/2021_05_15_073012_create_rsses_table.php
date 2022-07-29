<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRssesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsses', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tv_id')->nullable();
            $table->string('name');
            $table->longText('link')->nullable();
            $table->string('image');
            $table->string('count')->default(10);
            $table->string('position')->nullable();
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
        Schema::dropIfExists('rsses');
    }
}
