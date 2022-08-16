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
        Schema::create('user_postulados_relacions', function (Blueprint $table) {
            $table->id();    
            
            $table->foreignId('user_id')
            ->nullable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete(); 

            $table->string('edad');

            $table->foreignId('generos_id')
            ->nullable()
            ->constrained('generos')
            ->cascadeOnUpdate()
            ->nullOnDelete();
           
            $table->foreignId('zonas_id')
            ->nullable()
            ->constrained('zonas')
            ->cascadeOnUpdate()
            ->nullOnDelete();
           
            $table->foreignId('localidades_id')
            ->nullable()
            ->constrained('localidades')
            ->cascadeOnUpdate()
            ->nullOnDelete(); 

            $table->string('barrio');
            $table->string('telefono');
            $table->string('email_laboral');
            $table->string('profile_image');
            $table->string('sobre_mi');
            $table->string('carrera');
            $table->string('certificado');

            $table->foreignId('estados_id')
            ->nullable()
            ->constrained('estados')
            ->cascadeOnUpdate()
            ->nullOnDelete();

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
        Schema::dropIfExists('user_postulados_relacions');
    }
};
