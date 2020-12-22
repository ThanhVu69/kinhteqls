<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chuongtrinhdaotaos extends Model
{
    protected $table = "chuongtrinhdaotaos";

    protected $fillable = ['id','id_bomon','chuandaura','quydinhdaotao','danhmucchuongtrinh','url'];

    public $timestamps = true;
    public function daotaodaihocs()
    {
        return $this->belongsTo('App\daotaodaihocs','id_daotao','id');
    }
}
