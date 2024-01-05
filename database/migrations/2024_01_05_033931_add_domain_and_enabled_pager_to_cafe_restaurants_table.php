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
        Schema::table('cafe_restaurants', function (Blueprint $table) {
            $table->string('domain_address')
                ->nullable();
            $table->boolean('has_domain_address')
                ->default(false);

            $table->boolean('enabled_pager')
                ->default(true);


        });
        $this->seed();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_restaurants', function (Blueprint $table) {
            $table->dropColumn('domain_address');
            $table->dropColumn('has_domain_address');
            $table->dropColumn('enabled_pager');
        });
    }

    public function seed(): void
    {
        if (!env('RUN_SEEDERS_IN_MIGRATIONS')) {
            return;
        }
    }
};
