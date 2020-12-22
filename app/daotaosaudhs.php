<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daotaosaudhs extends Model
{
    protected $table = "daotaosaudhs";

    protected $fillable = ['id','danhsachluanvan','danhsachnghiencuusinh','danhsachtapchi','url'];

    public $timestamps = true;
}
