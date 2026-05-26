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
        Schema::create('alunos', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome', 150);
            $table->date('datanasc');
            $table->string('cpf', 14)->unique('cpf');
            $table->string('telefone', 20)->nullable();
            $table->integer('plano_id')->index('fk_alunos_plano');
            $table->integer('status_id')->default(1)->index('fk_alunos_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
