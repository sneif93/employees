<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('city', function (Blueprint $table) {
            $table->foreign(['fk_id_country'], 'fk_city_country1')->references(['id_country'])->on('country')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('city', function (Blueprint $table) {
            $table->dropForeign('fk_city_country1');
        });
    }
}
