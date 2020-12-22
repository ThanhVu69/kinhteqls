<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chuongtrinhdaotaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuongtrinhdaotaos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bomon');
            $table->string('chuandaura');
            $table->string('quydinhdaotao');
            $table->string('danhmucchuongtrinh');
            $table->string('url');
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
        Schema::dropIfExists('chuongtrinhdaotaos');
    }
}
