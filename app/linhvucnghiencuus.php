<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class linhvucnghiencuus extends Model
{
    //
    protected $table = "linhvucnghiencuus";

    protected $fillable = ['id','huongnghiencuu','tacgia','soluongnhan','url'];

	public $timestamps = true;
}