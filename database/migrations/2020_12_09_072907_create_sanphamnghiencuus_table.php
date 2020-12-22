<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSanphamnghiencuusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanphamnghiencuus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bomon')->unsigned();
            $table->foreign('id_bomon')->references('id')->on('bomons')->onUpdate('cascade');
            $table->longText('tendetai');
            $table->string('nam');
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
        Schema::dropIfExists('sanphamnghiencuus');
    }
}
