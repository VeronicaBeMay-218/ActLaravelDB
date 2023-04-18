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
        Schema::create('notas', function (Blueprint $table) {
            $table->id();

            $table->string('anotaciones',1000);
            $table->string('palabrasClave',1000);
            $table->string('resumen',1000);
           
            $table->foreignId('user_id')

            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreignId('topic_id')

            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notas');
    }
};
