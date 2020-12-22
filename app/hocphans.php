<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hocphans extends Model
{
    //
    protected $table = "hocphans";

    protected $fillable = ['id','id_bomon','tenhocphan','mahocphan','quydinhtinchi'];

	public $timestamps = true;
}