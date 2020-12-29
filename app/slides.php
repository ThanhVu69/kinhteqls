<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slides extends Model
{
    protected $table = "slides";

    protected $fillable = ['id','anh'];

    public $timestamps = true;
}
