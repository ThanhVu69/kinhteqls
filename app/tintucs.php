<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintucs extends Model
{
    //
    protected $table = "tintucs";

    protected $fillable = ['id','tieude','url','noidung','ngay','loai','hinhanh'];

    public $timestamps = true;
}
