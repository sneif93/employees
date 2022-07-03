<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee', function (Blueprint $table) {
            $table->foreign(['city_id_city'], 'fk_employee_city')->references(['id_city'])->on('city')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['document_type_id_document_type'], 'fk_employee_document_type1')->references(['id_document_type'])->on('document_type')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee', function (Blueprint $table) {
            $table->dropForeign('fk_employee_city');
            $table->dropForeign('fk_employee_document_type1');
        });
    }
}
