<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('search_logs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->json('request');
            $this->seed();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('search_logs');
    }

    public function seed(): void
    {
        if (!env('RUN_SEEDERS_IN_MIGRATIONS')) {
            return;
        }
    }
};
