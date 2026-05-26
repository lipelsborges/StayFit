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
        Schema::create('instrutores', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nome', 150);
            $table->string('cpf', 14)->nullable()->unique('cpf');
            $table->integer('status_id')->default(1)->index('fk_instrutores_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instrutores');
    }
};
