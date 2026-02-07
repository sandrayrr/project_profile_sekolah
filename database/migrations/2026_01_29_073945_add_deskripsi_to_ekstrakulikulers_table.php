<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

public function up(): void
{
    Schema::table('ekstrakulikulers', function (Blueprint $table) {
        $table->text('deskripsi')->nullable(); // Tambahkan kolom deskripsi dulu
        $table->string('pembina')->nullable()->after('deskripsi'); // Baru pembina
    });
}

public function down(): void
{
    Schema::table('ekstrakulikulers', function (Blueprint $table) {
        $table->dropColumn(['deskripsi', 'pembina']);
    });
}
};
