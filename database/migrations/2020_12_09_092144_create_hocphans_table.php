<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocphansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocphans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bomon')->unsigned();
            $table->foreign('id_bomon')->references('id')->on('bomons')->onUpdate('cascade');
            $table->string('tenhocphan');
            $table->string('mahocphan');
            $table->string('quydinhtinchi');
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
        Schema::dropIfExists('hocphans');
    }
}
