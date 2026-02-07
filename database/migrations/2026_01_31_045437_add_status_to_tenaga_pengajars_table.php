<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('tenaga_pengajars', function (Blueprint $table) {
            $table->string('status')->after('pengampu');
        });
    }

    public function down(): void
    {
        Schema::table('tenaga_pengajars', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};