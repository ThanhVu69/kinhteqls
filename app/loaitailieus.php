<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaitailieus extends Model
{
    //
    protected $table = "loaitailieus";

    protected $fillable = ['id','url','ten'];

	public $timestamps = true;
}
