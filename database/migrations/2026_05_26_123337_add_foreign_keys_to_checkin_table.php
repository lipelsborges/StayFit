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
        Schema::table('checkin', function (Blueprint $table) {
            $table->foreign(['aluno_id'], 'fk_checkin_aluno')->references(['id'])->on('alunos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('checkin', function (Blueprint $table) {
            $table->dropForeign('fk_checkin_aluno');
        });
    }
};
