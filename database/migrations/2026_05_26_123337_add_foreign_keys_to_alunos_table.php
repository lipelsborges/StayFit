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
        Schema::table('alunos', function (Blueprint $table) {
            $table->foreign(['plano_id'], 'fk_alunos_plano')->references(['id'])->on('planos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['status_id'], 'fk_alunos_status')->references(['id'])->on('status')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('alunos', function (Blueprint $table) {
            $table->dropForeign('fk_alunos_plano');
            $table->dropForeign('fk_alunos_status');
        });
    }
};
