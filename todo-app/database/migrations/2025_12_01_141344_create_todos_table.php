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
        Schema::create('todos', function (Blueprint $table) {
        $table->id();
        $table->string('title'); // nama tugas
        $table->boolean('completed')->default(false); // status tugas
        $table->string('priority')->default('medium'); // prioritas: low/medium/high
        $table->date('date')->nullable(); // tanggal tugas
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
