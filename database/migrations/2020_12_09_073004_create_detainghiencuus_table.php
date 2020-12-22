<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetainghiencuusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detainghiencuus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bomon')->unsigned();
            $table->foreign('id_bomon')->references('id')->on('bomons')->onUpdate('cascade');
            $table->longText('tendetai');
            $table->string('dangdetai');
            $table->string('thoigiannghiemthu');
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
        Schema::dropIfExists('detainghiencuus');
    }
}
