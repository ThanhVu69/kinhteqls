<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bosuutaps extends Model
{
    //
    protected $table = "bosuutaps";

    protected $fillable = ['id','hinhanh','is_loaibosuutap'];

    public $timestamps = true;
}
