<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInitial extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('hunting_license_info')->nullable();
            $table->text('fishing_license_info')->nullable();
            $table->text('whitetail_seasons')->nullable();
            $table->text('whitetail_permits')->nullable();
            $table->text('mule_deer_seasons')->nullable();
            $table->text('mule_deer_permits')->nullable();
            $table->text('elk_seasons')->nullable();
            $table->text('elk_permits')->nullable();
            $table->text('turkey_seasons')->nullable();
            $table->text('turkey_permits')->nullable();
            $table->timestamps();
        });

        Schema::create('places', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->string('location_name');
            $table->string('contact_number')->nullable();
            $table->string('cover_image')->nullable();
            $table->text('description')->nullable();
            $table->text('hunting_description')->nullable();
            $table->text('fishing_description')->nullable();

            $table->string('hunting_info')->nullable();
            $table->string('fishing_info')->nullable();
            $table->integer('hunting_acres')->nullable();
            $table->integer('fishing_acres')->nullable();
            $table->string('animal_list')->nullable();
            $table->string('fish_list')->nullable();
            $table->string('boat_fishing')->nullable();
            $table->boolean('has_boat_ramps')->default(false);
            $table->string('average_water_depth')->nullable();
            $table->string('catch_limits')->nullable();
            $table->string('google_maps_url')->nullable();
            $table->string('location_lat_long')->nullable();
            $table->string('weather_historical')->nullable(); // json list of months and temps
            $table->string('current_weather')->nullable();
            $table->string('closest_town')->nullable();
            $table->string('closest_town_map')->nullable();
            $table->string('nearest_hospital')->nullable();
            $table->string('nearest_hospital_map')->nullable();
            $table->decimal('nearest_hospital_distance')->default(0);
            $table->string('closest_lodging')->nullable();
            $table->string('closest_lodging_map')->nullable();
            $table->string('closest_camping')->nullable();
            $table->string('closest_camping_map')->nullable();
            $table->string('closest_food')->nullable();
            $table->string('closest_food_map')->nullable();
            $table->string('closest_bar')->nullable();
            $table->string('closest_bar_map')->nullable();
            $table->string('dangerous_animals')->nullable();
            $table->string('hunting_zone_info')->nullable();
            $table->string('ice_fishing_months')->nullable();
            $table->decimal('overall_score')->nullable(0);
            $table->decimal('weather_score')->nullable(0);
            $table->decimal('dangerous_animal_score')->default(0);
            $table->decimal('cost_score')->default(0);
            $table->decimal('cell_coverage_score')->default(0);
            $table->decimal('boonies_score')->default(0);
            $table->decimal('camping_score')->default(0);
            $table->decimal('lodging_score')->default(0);
            $table->decimal('food_score')->default(0);
            $table->decimal('bar_score')->default(0);
            $table->decimal('stores_score')->default(0);
            $table->decimal('mosquito_score')->default(0);
            $table->decimal('tick_score')->default(0);
            $table->decimal('whitetail_score')->default(0);
            $table->decimal('mule_deer_score')->default(0);
            $table->decimal('turkey_score')->default(0);
            $table->decimal('elk_score')->default(0);
            $table->decimal('fishing_score')->default(0);
            $table->decimal('ice_fishing_score')->default(0);
            $table->decimal('trout_score')->default(0);
            $table->decimal('bass_score')->default(0);
            $table->decimal('salmon_score')->default(0);
            $table->decimal('crappie_score')->default(0);
            $table->decimal('bluegill_score')->default(0);
            $table->decimal('catfish_score')->default(0);
            $table->decimal('pike_score')->default(0);
            $table->decimal('walleye_score')->default(0);
            $table->timestamps();

            $table->foreign('state_id')
                ->references('id')
                ->on('states')
                ->onDelete('cascade');
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('place_id');
            $table->integer('points')->default(0);
            $table->string('file_path');
            $table->string('description')->nullable();
            $table->timestamps();

            $table->foreign('place_id')
                ->references('id')
                ->on('places')
                ->onDelete('cascade');
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('place_id');
            $table->text('text');
            $table->timestamps();

            $table->foreign('place_id')
                ->references('id')
                ->on('places')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('places')
                ->onDelete('cascade');
        });

        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
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
        Schema::dropIfExists('states');
        Schema::dropIfExists('places');
        Schema::dropIfExists('images');
        Schema::dropIfExists('reviews');
        Schema::dropIfExists('subscribers');
    }
}