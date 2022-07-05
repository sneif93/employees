<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->integer('id_employee', true);
            $table->string('name', 45)->nullable();
            $table->string('last_name', 45)->nullable();
            $table->string('document_number', 45)->nullable();
            $table->string('address', 245)->nullable();
            $table->string('phone_number', 45)->nullable();
            $table->integer('city_id_city')->index('fk_employee_city_idx');
            $table->integer('document_type_id_document_type')->index('fk_employee_document_type1_idx');
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
        Schema::dropIfExists('employee');
    }
}
