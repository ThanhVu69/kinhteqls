<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daotaotiensys extends Model
{
    protected $table = "daotaotiensys";

    protected $fillable = ['id','gioithieuchung','kinhtehoc','daurakinhtehoc','quanlycongnghiep','dauraquanlycongnghiep','url'];

    public $timestamps = true;
}
