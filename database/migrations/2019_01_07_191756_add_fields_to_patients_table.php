<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToPatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->string('name')->after('id');
            $table->string('address')->after('name');
            $table->string('city')->after('address');
            $table->string('state')->after('city');
            $table->integer('age')->unsigned()->after('state');
            $table->string('birthday')->after('age');
            $table->string('parent')->after('birthday');
            $table->string('phone')->after('parent');
            $table->string('sex')->after('phone');
            $table->string('occupation')->after('sex');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropColumn(['name','address','city','state','age','birthday','parent','phone','sex','ocupation']);
        });
    }
}
