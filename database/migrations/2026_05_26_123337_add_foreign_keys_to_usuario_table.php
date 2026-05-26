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
        Schema::table('usuario', function (Blueprint $table) {
            $table->foreign(['status_id'], 'fk_usuario_status')->references(['id'])->on('status')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tipo_id'], 'fk_usuario_tipo')->references(['id'])->on('tipo_usuario')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('usuario', function (Blueprint $table) {
            $table->dropForeign('fk_usuario_status');
            $table->dropForeign('fk_usuario_tipo');
        });
    }
};
