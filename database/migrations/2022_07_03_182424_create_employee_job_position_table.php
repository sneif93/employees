<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeJobPositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_job_position', function (Blueprint $table) {
            $table->integer('id_employee_job_position', true);
            $table->integer('fk_id_employee')->index('fk_employee_has_job_position_employee1_idx');
            $table->integer('fk_id_job_position')->index('fk_employee_has_job_position_job_position1_idx');
            $table->integer('id_direct_boss_employee_job_position')->nullable()->index('fk_employee_job_position_employee_job_position1_idx');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
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
        Schema::dropIfExists('employee_job_position');
    }
}
