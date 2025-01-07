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
        Schema::create('xcode_asset', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pc');
            $table->string('processor');
            $table->enum('ram', ['2GB', '4GB', '8GB', '16GB', '32GB']);
            $table->string('vga');
            $table->string('kapasitas_penyimpanan');
            $table->enum('tipe_penyimpanan', ['hdd', 'ssd']);
            $table->string('monitor');
            $table->enum('status', ['active', 'inActive']);
            $table->string('createdBy');
            $table->dateTime('createdDate');
            $table->string('updatedBy');
            $table->dateTime('updatedDate');
            $table->timestamps();

            $table->foreignId('id_ruangan')->constrained('xcode_ruangan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xcode_asset');
    }
};
