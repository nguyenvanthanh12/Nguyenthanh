<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtkmc2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ts_ctkmc2', function (Blueprint $table) {
            $table->integer('idKMC2')->unsigned();
            $table->foreign('idKMC2')->references('id')->on('ts_kmc2')->onDelete('cascade');
            $table->integer('idDDH')->unsigned();
            $table->foreign('idDDH')->references('id')->on('ts_dondathang')->onDelete('cascade');
            $table->dateTime('BatDau');
            $table->dateTime('KetThuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ts_ctkmc2');
    }
}
