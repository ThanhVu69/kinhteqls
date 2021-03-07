<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanchaphanhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banchaphanhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('hoten');
            $table->string('masosv');
            $table->string('chucvu');
            $table->string('anh');
            $table->string('lop');
            $table->string('email');
            $table->string('sdt');
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
        Schema::dropIfExists('banchaphanhs');
    }
}
