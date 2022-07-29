<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGlobalSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('global_settings', function (Blueprint $table) {
            $table->id();
            $table->string('country')->nullable();
            $table->string('time_zone')->default(0);
            $table->string('company_name')->nullable();
            $table->string('company_logo')->nullable();
            $table->string('plan_id')->nullable();
            $table->date('expiry_date')->nullable();
            $table->string('dashboardLogo')->nullable();
            $table->string('menuBackground')->nullable();
            $table->string('allowed_media')->nullable();
            $table->string('allowed_banner')->nullable();
            $table->string('allowed_logo')->nullable();
            $table->string('rate_source')->default('db');
            $table->string('industry_id')->nullable();
            $table->string('time_type')->nullable();
            $table->boolean('show_announcement')->default(true);
            
            $table->boolean('show_logo')->default(true);
            $table->boolean('show_template')->default(true);
            $table->boolean('show_clock')->default(true);
            $table->boolean('show_banner')->default(true);
            $table->boolean('show_rate')->default(true);
            $table->boolean('allow_scheduling')->default(true);
            $table->boolean('allow_custom_news')->default(true);
            $table->boolean('allow_rss_news')->default(true);
            $table->boolean('to_zip')->default(false);
            $table->boolean('to_csv')->default(false);
            $table->boolean('add_display')->default(false);
            $table->boolean('add_location')->default(false);
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
        Schema::dropIfExists('global_settings');
    }
}
