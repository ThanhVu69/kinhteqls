<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSachdaxuatbansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sachdaxuatbans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bomon')->unsigned();
            $table->foreign('id_bomon')->references('id')->on('bomons')->onUpdate('cascade');
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
        Schema::dropIfExists('sachdaxuatbans');
    }
}
