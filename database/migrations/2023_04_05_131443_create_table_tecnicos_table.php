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
        Schema::create('table_tecnicos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('data_table_id')->unique();
            $table->string('nome_tecnico');
            $table->string('email');
            $table->integer('contacto');
            $table->integer('idade');
            $table->string('genero');

            $table->foreign('data_table_id')->references('id')->on('data_tables')->delete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_tecnicos');
    }
};
