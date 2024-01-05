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
        Schema::create('qr_codes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('slug')
                ->unique();
            $table->string('type'); //direct, part_of_business
//            $table->text('destination');
            $table->json('meta')
                ->nullable();
            $table->foreignId('cafe_restaurant_id')
                ->nullable()
                ->comment('owner');

            $this->seed();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_codes');
    }

    public function seed(): void
    {
        if (!env('RUN_SEEDERS_IN_MIGRATIONS')) {
            return;
        }
    }
};
