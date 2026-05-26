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
        Schema::create('consumo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('aluno_id')->index('fk_consumo_aluno');
            $table->integer('item_id')->index('fk_consumo_item');
            $table->integer('quantidade')->default(1);
            $table->decimal('valor_unitario', 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consumo');
    }
};
