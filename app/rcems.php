<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rcems extends Model
{
    //
    protected $table = "rcems";

    protected $fillable = ['id','hoten','namsinh','chucvu','url'];

	public $timestamps = true;
}