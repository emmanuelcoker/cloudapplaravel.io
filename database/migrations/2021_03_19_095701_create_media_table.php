<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tv_id')->nullable;

            $table->string('position')->default(0);
            $table->string('title');
            $table->text('description');
            $table->string('file');
            $table->string('type');
            $table->string('extension')->nullable();
            $table->string('content_type')->nullable();
            $table->boolean('is_active')->default(true);
            
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();

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
        Schema::dropIfExists('media');
    }
}
