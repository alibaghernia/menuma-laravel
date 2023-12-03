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
        Schema::table('cafe_restaurants', function (Blueprint $table) {
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('whatsapp')->nullable();

        });
        $this->seed();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_restaurants', function (Blueprint $table) {
            $table->dropColumn('phone_number');
            $table->dropColumn('email');
        });
    }

    public function seed(): void
    {
        if (!env('RUN_SEEDERS_IN_MIGRATIONS')) {
            return;
        }
    }
};
