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
        Schema::table('consumo', function (Blueprint $table) {
            $table->foreign(['aluno_id'], 'fk_consumo_aluno')->references(['id'])->on('alunos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['item_id'], 'fk_consumo_item')->references(['id'])->on('itens')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consumo', function (Blueprint $table) {
            $table->dropForeign('fk_consumo_aluno');
            $table->dropForeign('fk_consumo_item');
        });
    }
};
