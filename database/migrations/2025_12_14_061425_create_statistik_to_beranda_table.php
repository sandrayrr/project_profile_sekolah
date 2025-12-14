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
        Schema::table('berandas', function (Blueprint $table) {
    $table->integer('jumlah_siswa')->default(0);
    $table->integer('jumlah_guru')->default(0);
    $table->integer('jumlah_jurusan')->default(0);
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistik_to_beranda');
    }
};
