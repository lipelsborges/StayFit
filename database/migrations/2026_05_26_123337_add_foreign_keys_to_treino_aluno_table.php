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
        Schema::table('treino_aluno', function (Blueprint $table) {
            $table->foreign(['aluno_id'], 'fk_traluno_aluno')->references(['id'])->on('alunos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['exercicio_id'], 'fk_traluno_exercicio')->references(['id'])->on('exercicios')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['instrutor_id'], 'fk_traluno_instrutor')->references(['id'])->on('instrutores')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('treino_aluno', function (Blueprint $table) {
            $table->dropForeign('fk_traluno_aluno');
            $table->dropForeign('fk_traluno_exercicio');
            $table->dropForeign('fk_traluno_instrutor');
        });
    }
};
