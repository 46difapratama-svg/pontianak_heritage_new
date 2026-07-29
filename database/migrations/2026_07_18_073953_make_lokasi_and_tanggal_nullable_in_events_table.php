<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('events', function (Blueprint $table) {
            // Mengubah kolom menjadi nullable agar boleh dikosongkan
            $table->string('lokasi')->nullable()->change();
            $table->date('tanggal_pelaksanaan')->nullable()->change();
        });
    }

    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {
            $table->string('lokasi')->notNullable()->change();
            $table->date('tanggal_pelaksanaan')->notNullable()->change();
        });
    }
};