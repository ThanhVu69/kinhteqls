<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class banchaphanhs extends Model
{
    //
    protected $table = "banchaphanhs";

    protected $fillable = ['id','hoten','masosv','chucvu','anh','lop','email','sdt'];

    public $timestamps = true;
}
