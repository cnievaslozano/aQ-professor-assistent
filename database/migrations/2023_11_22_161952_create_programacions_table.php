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
        Schema::create('programacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('users_id'); // Relación con la tabla users
            $table->foreign('users_id')->references('id')->on('users');
            $table->string('any_academic');
            $table->text('descripcio');
            $table->timestamps();
        });

        Schema::create('programacio_modul', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('programacio_id');
            $table->unsignedBigInteger('modul_id');
            $table->foreign('programacio_id')->references('id')->on('programacions');
            $table->foreign('modul_id')->references('id')->on('moduls');
            $table->timestamps();
        });

        Schema::create('activitats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('programacio_id');
            $table->foreign('programacio_id')->references('id')->on('programacions');
            $table->string('descripcio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programacions');
        Schema::dropIfExists('activitats');
        Schema::dropIfExists('programacio_modul');
    }
};
