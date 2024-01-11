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
        Schema::table('tables', function (Blueprint $table) {
            $table->foreignId('hall_id')->nullable();
            $table->text('banner_image')->nullable();
            $table->json('images')->nullable();
            $table->unsignedInteger('normal_capacity')->nullable();
            $table->unsignedInteger('max_capacity')->nullable();
        });
        $this->seed();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tables', function (Blueprint $table) {
            //
        });
    }

    public function seed(): void
    {
        if (!env('RUN_SEEDERS_IN_MIGRATIONS')) {
            return;
        }
    }
};
