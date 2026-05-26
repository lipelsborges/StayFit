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
        Schema::table('mensalidade', function (Blueprint $table) {
            $table->foreign(['id_aluno'], 'fk_mensalidade_aluno')->references(['id'])->on('alunos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['status_id'], 'fk_mensalidade_status')->references(['id'])->on('status')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mensalidade', function (Blueprint $table) {
            $table->dropForeign('fk_mensalidade_aluno');
            $table->dropForeign('fk_mensalidade_status');
        });
    }
};
