<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_position', function (Blueprint $table) {
            $table->integer('id_job_position', true);
            $table->string('name', 75);
            $table->integer('parent_id_job_position')->index('fk_job_position_job_position1_idx');
            $table->timestamp('created_at');
            $table->timestamp('update_at')->nullable();
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
        Schema::dropIfExists('job_position');
    }
}
