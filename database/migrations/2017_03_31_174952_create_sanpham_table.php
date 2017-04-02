<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ts_sanpham', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MaSP',10)->unique();
            $table->string('TenSP');
            $table->string('TenKhongDau');
            $table->string('Gia');
            $table->string('AnhChinh');
            $table->text('TomTat');
            $table->text('NoiDung');
            $table->string('BaoHanh');
            $table->integer('idKM')->unsigned();
            $table->foreign('idKM')->references('id')->on('ts_khuyenmai')->onDelete('cascade');
            $table->integer('idLSP')->unsigned();
            $table->foreign('idLSP')->references('id')->on('ts_loaisanpham')->onDelete('cascade');
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
        Schema::dropIfExists('ts_sanpham');
    }
}
