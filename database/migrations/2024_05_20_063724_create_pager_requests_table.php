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
        Schema::create('pager_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('cafe_restaurant_id');
            $table->foreignId('table_id');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pager_requests');
    }
};
