<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->json('new_name');
        });

        $categories = DB::table('categories')->get();
        foreach ($categories as $category) {
            DB::table('categories')
                ->where('id', $category->id)
                ->update(['new_name' => '{"fa":"' . $category->name . '"}']);
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        todo
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('new_name');
        });
    }
};
