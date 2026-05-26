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
        Schema::create('avaliacao', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('aluno_id')->index('fk_avaliacao_aluno');
            $table->decimal('altura', 4)->nullable();
            $table->decimal('peso', 5)->nullable();
            $table->decimal('percgordura', 5)->nullable();
            $table->string('fuma_bebe', 50)->nullable();
            $table->string('problema_saude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacao');
    }
};
