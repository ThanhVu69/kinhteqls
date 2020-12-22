<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bomons extends Model
{
    //
    protected $table = "bomons";

    protected $fillable = ['id','tenbomon','huongnghiencuu','url'];

    public $timestamps = true;
    public function canbogiangviens()
    {
        return $this->hasMany('App\canbogiangviens','id_bomon','id');
    }
    public function sachdaxuatbans()
    {
        return $this->hasMany('App\sachdaxuatbans','id_bomon','id');
    }
    public function sanphamnghiencuus()
    {
        return $this->hasMany('App\sanphamnghiencuus','id_bomon','id');
    }
    public function detainghiencuus()
    {
        return $this->hasMany('App\detainghiencuus','id_bomon','id');
    }
}