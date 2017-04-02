<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDondathangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ts_dondathang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MaDDH',10)->unique();
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('ts_users');
            $table->string('NgayDatHang');
            $table->text('GhiChu');
            $table->tinyInteger('TrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ts_dondathang');
    }
}
