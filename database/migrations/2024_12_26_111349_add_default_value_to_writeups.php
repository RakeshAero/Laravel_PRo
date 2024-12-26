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
        Schema::table('writeups', function (Blueprint $table) {
            $table->string('title')->default('general')->change();
            $table->string('posts')->default('general')->change();
            $table->string('category')->default('general')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('writeups', function (Blueprint $table) {
            $table->string('title')->default('')->change();
        });
    }
};
