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
        // Elimina la tabla si ya existe para evitar conflictos
        Schema::dropIfExists('usuarios');


        // Crea la tabla desde cero leyendo todas las columnas
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 100);
            $table->string('apellidos', 200);
            $table->integer('edad');
            $table->decimal('sueldo', 10, 2);
            $table->string('email', 100);
            $table->string('password', 255);
            $table->timestamps();
        });

        /*
        // CREA LA MISMA BBDD al realizar el comando "php artisan migrate:refresh" PERO CON SQL PURO
        DB::statement('
            CREATE TABLE usuarios (
            id INT AUTO_INCREMENT PRIMARY KEY,
            nombre VARCHAR(100) NOT NULL,
            apellidos VARCHAR(200) NOT NULL,
            edad INT NOT NULL,
            sueldo DECIMAL(10, 2) NOT NULL,
            email VARCHAR(100) NOT NULL,
            password VARCHAR(255) NOT NULL

        )');
        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
