<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToJobPositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('job_position', function (Blueprint $table) {
            $table->foreign(['parent_id_job_position'], 'fk_job_position_job_position1')->references(['id_job_position'])->on('job_position')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('job_position', function (Blueprint $table) {
            $table->dropForeign('fk_job_position_job_position1');
        });
    }
}
