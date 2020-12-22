<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Daotaothacsys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daotaothacsys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gioithieuchung');
            $table->string('chuandaura');
            $table->string('doituong');
            $table->string('chuongtrinhchuyendoi');
            $table->string('danhmuchocphan');
            $table->string('danhsachgiangvien');
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
        Schema::dropIfExists('daotaothacsys');
    }
}
