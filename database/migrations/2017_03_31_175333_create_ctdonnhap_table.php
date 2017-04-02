<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtdonnhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ts_ctdonnhap', function (Blueprint $table) {
            $table->integer('idSP')->unsigned();
            $table->foreign('idSP')->references('id')->on('ts_sanpham')->onDelete('cascade');
            $table->integer('idDN')->unsigned();
            $table->foreign('idDN')->references('id')->on('ts_donnhap')->onDelete('cascade');
            $table->string('SLN');
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
        Schema::dropIfExists('ts_ctdonnhap');
    }
}
