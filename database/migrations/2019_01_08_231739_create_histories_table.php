<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('motivo');
            $table->integer('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade')->onUpdate('cascade');
            $table->string('anemia');
            $table->string('asma');
            $table->string('cancer');
            $table->string('colesterol');
            $table->string('convulsiones');
            $table->string('diabetes');
            $table->string('enf_cardicacas');
            $table->string('epilepsia');
            $table->string('homofilia');
            $table->string('hepatitis');
            $table->string('hipertiroidismo');
            $table->string('hipotiroidismo');
            $table->string('infartos');
            $table->string('marcapasos');
            $table->string('migrañas');
            $table->string('presion_alta');
            $table->string('presion_baja');
            $table->string('prob_riñones');
            $table->string('quimioterapias');
            $table->string('sangrado');
            $table->string('taquicardias');
            $table->string('tuberculosis');
            $table->string('ulceras_gastricas');
            $table->string('vih');
            $table->string('embarazo');
            $table->string('amamantando');
            $table->string('anticonceptivo');
            $table->string('medicamentos');
            $table->string('alergias');
            $table->string('prob_dental_previo');
            $table->string('tabaquismo');
            $table->string('alcoholismo');
            $table->string('drogas');
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
        Schema::dropIfExists('histories');
    }
}
