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
        Schema::create('user_pacientes', function (Blueprint $table) {
           
            $table->id();    
            $table->string('num_caso');

            $table->foreignId('usuario_id')
            ->nullable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete(); 

            $table->string('edad_p');
           
            $table->string('diagnostico');
            $table->string('genero');
            $table->Text('abordaje');
            

           
            $table->foreignId('zonas_id')
            ->nullable()
            ->constrained('zonas')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('genero_id')
            ->nullable()
            ->constrained('generos')
            ->cascadeOnUpdate()
            ->nullOnDelete();
           
            $table->string('localidad');
            $table->string('telefono_caso');
            $table->string('email_caso');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_pacientes');
    }
};
