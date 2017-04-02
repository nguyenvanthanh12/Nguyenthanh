<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtddhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ts_ctddh', function (Blueprint $table) {
            $table->integer('idDDH')->unsigned();
            $table->foreign('idDDH')->references('id')->on('ts_dondathang')->onDelete('cascade');
            $table->integer('idSP')->unsigned();
            $table->foreign('idSP')->references('id')->on('ts_sanpham')->onDelete('cascade');
            $table->string('SLDat');
            $table->integer('Gia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ts_ctddh');
    }
}
