<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonnhapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ts_donnhap', function (Blueprint $table) {
            $table->increments('id');
            $table->string('MaDN')->unique();
            $table->integer('idUser')->unsigned();
            $table->foreign('idUser')->references('id')->on('ts_users');
            $table->dateTime('NgayNhap');
            $table->string('GhiChu');
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
        Schema::dropIfExists('ts_donnhap');
    }
}
