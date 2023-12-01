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
        Schema::create('libro', function (Blueprint $table) {
            $table->string('isbn',5)->primary();
            $table->string('nombre',100);
            $table->text('descripcion');
            $table->string('genero',100);
            $table->float('precio');
            $table->text('observacion');
            $table->string('foto',10);
            $table->foreign('area_conocimiento',5)
                  ->references('cod_area')
                  ->on('area_conocimiento')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro');
    }
};
