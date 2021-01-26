<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tailieus extends Model
{
    //
    protected $table = "tailieus";

    protected $fillable = ['id','noidung'];

	public $timestamps = true;
}
