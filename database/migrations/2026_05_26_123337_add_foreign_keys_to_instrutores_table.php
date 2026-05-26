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
        Schema::table('instrutores', function (Blueprint $table) {
            $table->foreign(['status_id'], 'fk_instrutores_status')->references(['id'])->on('status')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('instrutores', function (Blueprint $table) {
            $table->dropForeign('fk_instrutores_status');
        });
    }
};
