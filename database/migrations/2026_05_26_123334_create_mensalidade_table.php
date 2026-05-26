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
        Schema::create('mensalidade', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_aluno')->index('fk_mensalidade_aluno');
            $table->date('data_inicio');
            $table->date('data_vencimento');
            $table->integer('status_id')->default(1)->index('fk_mensalidade_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensalidade');
    }
};
