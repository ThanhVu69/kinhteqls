<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinhvucnghiencuusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linhvucnghiencuus', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('huongnghiencuu');
            $table->string('tacgia');
            $table->string('soluongnhan');
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
        Schema::dropIfExists('linhvucnghiencuus');
    }
}
