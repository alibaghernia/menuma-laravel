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
        Schema::table('items', function (Blueprint $table) {
            $table->json('new_name');
            $table->json('new_description')->nullable();

        });

        $items = DB::table('items')->get();
        foreach ($items as $item) {
            $updateData = [
                'new_name' => json_encode(['fa' => $item->name]),
            ];
            if ($item->description) {
                $updateData['new_description'] = json_encode(['fa' => $item->description]);
            }

            DB::table('items')
                ->where('id', $item->id)
                ->update($updateData);
        }

        Schema::table('items', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->renameColumn('new_name', 'name');
            $table->dropColumn('description');
            $table->renameColumn('new_description', 'description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            // todo
        });
    }
};
