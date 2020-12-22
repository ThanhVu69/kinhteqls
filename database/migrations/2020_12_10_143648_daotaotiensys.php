<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Daotaotiensys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daotaotiensys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gioithieuchung');
            $table->string('kinhtehoc');
            $table->string('daurakinhtehoc');
            $table->string('quanlycongnghiep');
            $table->string('dauraquanlycongnghiep');
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
        Schema::dropIfExists('daotaotiensys');
    }
}
