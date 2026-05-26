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
        Schema::create('usuario', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome', 150);
            $table->string('usuario', 80)->unique('usuario');
            $table->string('senha');
            $table->string('cpf', 14)->nullable();
            $table->integer('status_id')->default(1)->index('fk_usuario_status');
            $table->integer('tipo_id')->index('fk_usuario_tipo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
