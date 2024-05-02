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
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->renameColumn('new_name', 'name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        todo
        Schema::table('categories', function (Blueprint $table) {
            $table->renameColumn('name', 'new_name');
//            $table->string('name');
        });
        Schema::table('categories', function (Blueprint $table) {
            $table->string('name');
        });


        $categories = DB::table('categories')->get();
        foreach ($categories as $category) {
            $faName = json_decode($category->new_name, true)['fa'];
            DB::table('categories')
                ->where('id', $category->id)
                ->update(['name' => $faName]);
        }
    }
};
