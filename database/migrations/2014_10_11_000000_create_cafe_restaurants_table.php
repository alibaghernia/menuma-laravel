<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cafe_restaurants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('logo_path');
            $table->string('banner_path')->nullable();
            $table->string('slug');
            $table->string('status');
            $table->json('social_media')->nullable();
            $table->json('working_hours')->nullable();
            $table->text('address')->nullable();
            $table->string('location_lat')->nullable();
            $table->string('location_long')->nullable();
            $table->text('description')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cafe_restaurants');
    }
};
