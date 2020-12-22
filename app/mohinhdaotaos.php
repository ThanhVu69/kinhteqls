<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mohinhdaotaos extends Model
{
    protected $table = "mohinhdaotaos";

    protected $fillable = ['id','noidung','url'];

    public $timestamps = true;
}
