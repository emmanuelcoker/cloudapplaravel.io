<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tvs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('zone_id');
            $table->string('name');
            $table->string('displayID');
            $table->boolean('is_active')->default(true);
            $table->boolean('show_date_image')->default(false);
            $table->boolean('show_time')->default(1);
            $table->boolean('interest_rate_type')->default(0);
            $table->string('clockImage')->nullable(); 
            $table->string('color')->nullable(); 
            $table->string('template')->nullable(); 
            $table->string('clockLayout')->nullable(); 
            $table->string('clock_background_color')->nullable(); 
            $table->string('localUpdateLogo')->nullable(); 
            $table->string('updatedVideo')->nullable(); 
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
        Schema::dropIfExists('tvs');
    }
}
