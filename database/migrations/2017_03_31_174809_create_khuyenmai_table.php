<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhuyenmaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ts_khuyenmai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Ten');
            $table->string('HinhThuc');
            $table->string('Anh');
            $table->dateTime('NgayBatDau');
            $table->dateTime('NgayKetThuc');
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
        Schema::dropIfExists('khuyenmai');
    }
}
