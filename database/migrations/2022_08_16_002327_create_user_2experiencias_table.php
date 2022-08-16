<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_2experiencias', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')
            ->nullable()
            ->constrained('user_postulados_relacions')
            ->cascadeOnUpdate()
            ->nullOnDelete(); 
            
      $table->foreignId('experiencia_id')
            ->nullable()
            ->constrained('experiencias')
            ->cascadeOnUpdate()
            ->nullOnDelete();




        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_2experiencias');
    }
};
