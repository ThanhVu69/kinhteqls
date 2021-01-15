<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaibosuutaps extends Model
{
    //
    protected $table = "loaibosuutaps";

    protected $fillable = ['id','ten','url'];

    public $timestamps = true;
}
