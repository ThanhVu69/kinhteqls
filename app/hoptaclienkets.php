<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hoptaclienkets extends Model
{
    //
    protected $table = "hoptaclienkets";

    protected $fillable = ['id','truonghoptac','url'];

	public $timestamps = true;
}