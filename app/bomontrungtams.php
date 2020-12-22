<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bomontrungtams extends Model
{
    //
    protected $table = "bomontrungtams";

    protected $fillable = ['id','gioithieuchhung'];

    public $timestamps = true;
}
