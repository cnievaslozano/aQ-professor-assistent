<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('moduls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('programacio_id'); // Relación con la tabla 'programacions'
            $table->foreign('programacio_id')->references('id')->on('programacions');
            $table->string('nom');
            $table->text('descripcio');
            $table->integer('hores_totals');
            $table->timestamps();
        });

        Schema::create('modul_uf', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('modul_id');
            $table->unsignedBigInteger('uf_id');
            $table->foreign('modul_id')->references('id')->on('moduls');
            $table->foreign('uf_id')->references('id')->on('ufs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modul_uf');
        Schema::dropIfExists('moduls');
    }
};
