<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class canbogiangviens extends Model
{
    //
    protected $table = "canbogiangviens";

    protected $fillable = ['id','id_bomon','hoten','chucvu','anh','diachilamviec','email','sdt','website','mongiangday','url'];

    public $timestamps = true;
    public function bomons()
    {
        return $this->belongsTo('App\bomons','id_bomon','id');
    }
}