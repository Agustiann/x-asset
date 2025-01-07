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
        Schema::create('xcode_ruangan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ruangan');
            $table->enum('status', ['active', 'inActive']);
            $table->string('createdBy');
            $table->dateTime('createdDate');
            $table->string('updatedBy');
            $table->dateTime('updatedDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xcode_ruangan');
    }
};
