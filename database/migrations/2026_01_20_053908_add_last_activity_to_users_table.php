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
            // Tambahkan kolom last_activity setelah updated_at
            $table->timestamp('last_activity')->nullable()->after('updated_at');
            
            // Optional: Tambahkan index untuk performa query
            $table->index('last_activity');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Hapus index jika ditambahkan
            $table->dropIndex(['last_activity']);
            
            // Hapus kolom last_activity
            $table->dropColumn('last_activity');
        });
    }
};