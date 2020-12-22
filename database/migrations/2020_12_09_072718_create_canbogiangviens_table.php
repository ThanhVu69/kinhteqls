<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanbogiangviensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canbogiangviens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bomon')->unsigned();
            $table->foreign('id_bomon')->references('id')->on('bomons')->onUpdate('cascade');
            $table->string('hoten');
            $table->string('chucvu');
            $table->string('anh');
            $table->string('diachilamviec');
            $table->string('email');
            $table->string('sdt');
            $table->string('website');
            $table->longtext('mongiangday');
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
        Schema::dropIfExists('canbogiangviens');
    }
}
