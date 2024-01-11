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
        Schema::create('conditional_discounts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('description')->nullable();
            $table->foreignId('cafe_restaurant_id');
//            $table->foreignId('discount_condition_id')->nullable();
            $this->seed();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conditional_discounts');
    }

    public function seed(): void
    {
        if (!env('RUN_SEEDERS_IN_MIGRATIONS')) {
            return;
        }
    }
};
