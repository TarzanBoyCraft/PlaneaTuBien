<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProspectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prospectos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('empleado_id')->unsigned()->nullable();
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->string('nombre');
            $table->string('appaterno');
            $table->string('apmaterno')->nullable();
            $table->string('sexo')->nullable();
            $table->string('email');
            $table->string('tel');
            $table->string('movil')->nullable();
            $table->decimal('monto',10,2);
            $table->string('plan');
            $table->integer('calificacion')->nullable();
            $table->decimal('sueldo',10,2)->default(0.00);
            $table->decimal('gastos',10,2)->default(0.00);
            $table->decimal('ahorro',10,2)->default(0.00);
            $table->boolean('aprobado')->nullable();
            $table->date('fecha_asignado')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
