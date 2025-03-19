<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('guides', function (Blueprint $table) {
        $table->string('title_translated')->nullable(); // Título traducido
        $table->text('summary_translated')->nullable(); // Resumen traducido
    });
}

public function down()
{
    Schema::table('guides', function (Blueprint $table) {
        $table->dropColumn(['title_translated', 'summary_translated']);
    });
}

};
