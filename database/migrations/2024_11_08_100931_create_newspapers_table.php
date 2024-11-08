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
        Schema::create('newspapers', function (Blueprint $table) {
            $table->id();
            $table->string('Judul Surat Kabar');
            $table->string('Author');
            $table->year('Tahun Terbit');
            $table->timestamps(); // Menambahkan kolom created_at dan updated_at

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newspapers');
    }
};
