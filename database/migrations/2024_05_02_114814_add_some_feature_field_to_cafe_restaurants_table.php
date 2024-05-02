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

            $table->boolean('enabled_multi_lang')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_restaurants', function (Blueprint $table) {
            $table->dropColumn('enabled_multi_lang');
        });
    }
};
