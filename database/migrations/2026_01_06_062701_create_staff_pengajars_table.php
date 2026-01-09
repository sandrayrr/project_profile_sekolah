<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('staff_pengajars', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('foto')->nullable(); // simpan nama file / path foto
            $table->string('pengampu'); // mata pelajaran / bidang
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('staff_pengajars');
    }
};
