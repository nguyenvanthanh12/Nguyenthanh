<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaithongsoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ts_loaithongso', function (Blueprint $table) {
            $table->integer('idTS')->unsigned();
            $table->foreign('idTS')->references('id')->on('ts_thongso')->onDelete('cascade');
            $table->integer('idSP')->unsigned();
            $table->foreign('idSP')->references('id')->on('ts_sanpham')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ts_loaithongso');
    }
}
