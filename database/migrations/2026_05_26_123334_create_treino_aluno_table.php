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
        Schema::create('treino_aluno', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('instrutor_id')->index('fk_traluno_instrutor');
            $table->integer('aluno_id')->index('fk_traluno_aluno');
            $table->integer('exercicio_id')->index('fk_traluno_exercicio');
            $table->string('repeticao', 50)->nullable();
            $table->integer('descanso')->nullable()->comment('em segundos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treino_aluno');
    }
};
