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
            $table->json('new_name');
            $table->json('new_description')->nullable();
            $table->json('new_address')->nullable();
        });

        $businesses = DB::table('cafe_restaurants')->get();
        foreach ($businesses as $business) {
            $updateData = [
                'new_name' => json_encode(['fa' => $business->name]),
            ];
            if ($business->description) {
                $updateData['new_description'] = json_encode(['fa' => $business->description]);
            }
            if ($business->address) {
                $updateData['new_address'] = json_encode(['fa' => $business->address]);
            }

            DB::table('cafe_restaurants')
                ->where('id', $business->id)
                ->update($updateData);
        }

        Schema::table('cafe_restaurants', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->renameColumn('new_name', 'name');
            $table->dropColumn('description');
            $table->renameColumn('new_description', 'description');
            $table->dropColumn('address');
            $table->renameColumn('new_address', 'address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_restaurants', function (Blueprint $table) {
            // todo
        });
    }
};
