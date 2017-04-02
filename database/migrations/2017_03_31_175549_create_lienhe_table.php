<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLienheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ts_lienhe', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ChuDe');
            $table->string('TieuDe');
            $table->text('NoiDung');
            $table->string('HoTen',50);
            $table->string('email');
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
        Schema::dropIfExists('ts_lienhe');
    }
}
