<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daotaothacsys extends Model
{
    protected $table = "daotaothacsys";

    protected $fillable = ['id','gioithieuchung','chuandaura','doituong','chuongtrinhchuyendoi','danhmuchocphan','danhsachgiangvien','url'];

    public $timestamps = true;
}
