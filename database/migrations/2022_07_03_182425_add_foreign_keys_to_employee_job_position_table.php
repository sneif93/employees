<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToEmployeeJobPositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('employee_job_position', function (Blueprint $table) {
            $table->foreign(['fk_id_employee'], 'fk_employee_has_job_position_employee1')->references(['id_employee'])->on('employee')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['fk_id_job_position'], 'fk_employee_has_job_position_job_position1')->references(['id_job_position'])->on('job_position')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['id_direct_boss_employee_job_position'], 'fk_employee_job_position_employee_job_position1')->references(['id_employee_job_position'])->on('employee_job_position')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee_job_position', function (Blueprint $table) {
            $table->dropForeign('fk_employee_has_job_position_employee1');
            $table->dropForeign('fk_employee_has_job_position_job_position1');
            $table->dropForeign('fk_employee_job_position_employee_job_position1');
        });
    }
}
