<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('histories', function (Blueprint $table) {
            $table->string('nombre_emergencia')->after('motivo');
            $table->string('parentesco')->after('nombre_emergencia');
            $table->string('telefono')->after('parentesco');
            $table->string('ocupacion')->after('telefono');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('histories', function (Blueprint $table) {
            $table->dropColumn('nombre_emergencia');
            $table->dropColumn('parentesco');
            $table->dropColumn('telefono');
            $table->dropColumn('ocupacion');
        });
    }
}
