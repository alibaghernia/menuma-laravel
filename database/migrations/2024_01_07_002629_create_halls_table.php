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
        Schema::create('halls', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('code');
            $table->unsignedInteger('normal_capacity')->nullable();
            $table->unsignedInteger('max_capacity')->nullable();
            $table->text('banner_image')->nullable();
            $table->json('images')->nullable();

            $table->foreignId('cafe_restaurant_id');

            $this->seed();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halls');
    }

    public function seed(): void
    {
        if (!env('RUN_SEEDERS_IN_MIGRATIONS')) {
            return;
        }
    }
};
