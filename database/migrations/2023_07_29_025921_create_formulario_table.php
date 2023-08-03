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
        Schema::create('formulario', function (Blueprint $table) {
            $table->id();

            $table->string('email');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni');
            $table->string('telefono');
            $table->string('escuela');
            $table->string('asesor');
            $table->string('asesor_dni');
            $table->string('asesor_orcit');
            $table->string('asesor2_dni')->nullable();
            $table->string('asesor2_orcit')->nullable();

            $table->string('nombre_proyecto');

            $table->string('name_autorizacion_pdf');
            $table->string('autorizacion_path_pdf');

            $table->string('name_constancia_pdf');
            $table->string('constancia_path_pdf');

            $table->string('name_tesis_pdf');
            $table->string('tesis_path_pdf');

            $table->string('name_tesis_doc');
            $table->string('tesis_path_doc');

            $table->string('handle')->default('no existe');
            $table->string('puntuacion')->default('no existe');

            $table->string('TyC01');
            $table->string('TyC02');
            $table->string('TyC03');
            $table->string('TyC04');



            $table->string('estado')->default('pendiente');
            $table->string('observacion')->nullable();
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
        Schema::dropIfExists('formulario');
    }
};
