<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lienhes extends Model
{
    //
    protected $table = "lienhes";

    protected $fillable = ['id','diachi','sdt','email','website','tuvantuyensinh','url'];

	public $timestamps = true;
}