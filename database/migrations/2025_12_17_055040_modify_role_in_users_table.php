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
        Schema::table('users', function (Blueprint $table) {
            // BARIS BARU: Cek dulu apakah kolom 'is_admin' ada
            if (Schema::hasColumn('users', 'is_admin')) {
                // Jika ada, baru kita hapus
                $table->dropColumn('is_admin');
            }
            
            // Tambahkan kolom 'role' yang baru
            $table->string('role')->after('email')->default('USER');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Logika kebalikan yang juga aman
            if (Schema::hasColumn('users', 'role')) {
                $table->dropColumn('role');
            }

            if (!Schema::hasColumn('users', 'is_admin')) {
                $table->boolean('is_admin')->default(false)->after('email');
            }
        });
    }
};