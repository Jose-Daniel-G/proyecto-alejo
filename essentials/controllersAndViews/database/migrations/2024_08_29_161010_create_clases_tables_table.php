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
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_id');
            $table->unsignedBigInteger('profesor_id');
            $table->unsignedBigInteger('vehiculo_id')->nullable();
            $table->unsignedBigInteger('curso_id');
            $table->dateTime('fecha_hora');
            $table->integer('duracion'); // En minutos
            $table->string('estado');
            $table->timestamps();

            // Relaciones
            $table->foreign('alumno_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('profesor_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('set null'); // Asumiendo que existe una tabla 'vehiculos'
            $table->foreign('curso_id')->references('id')->on('cursos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases');
    }
};
