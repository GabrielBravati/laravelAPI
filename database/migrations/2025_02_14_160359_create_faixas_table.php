<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('faixas', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('duracao');
            $table->foreignId('album_id')->constrained('albuns')->onDelete('cascade');
            $table->integer('ordem');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faixas');
    }
};