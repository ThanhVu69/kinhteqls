<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Daotaosaudhs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daotaosaudhs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('danhsachluanvan');
            $table->string('danhsachnghiencuusinh');
            $table->string('danhsachtapchi');
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
        Schema::dropIfExists('daotaosaudhs');
    }
}
