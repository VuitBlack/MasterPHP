<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->id();
            $table->foreignId('follower_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('followed_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
            
            // Evita que un usuario siga a la misma persona más de una vez
            $table->unique(['follower_id', 'followed_id'], 'uq_follow');
        });
        
        // Restricción CHECK en base de datos
        DB::statement('ALTER TABLE follows ADD CONSTRAINT chk_no_self_follow CHECK (follower_id != followed_id)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follows');
    }
};
