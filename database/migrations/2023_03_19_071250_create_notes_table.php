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
        Schema::create('notes', function (Blueprint $table) {//no cambiar nombre notes 
            $table->id();


           
            $table->string('anotaciones',200);
            $table->string('palabrasClave',200);
            $table->string('resumen',200);
           
            $table->foreignId('user_id')

            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');

            //$table->foreignId('topic_id')

            //->constrained()
            //->onUpdate('cascade')
            //->onDelete('cascade');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');//no cambiar nombre notes 
    }
};
