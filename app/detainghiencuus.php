<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detainghiencuus extends Model
{
    //
    protected $table = "detainghiencuus";

    protected $fillable = ['id','id_bomon','tendetai','dangdetai','thoigiannghiemthu','url'];

    public $timestamps = true;
    public function bomons()
    {
        return $this->belongsTo('App\bomons','id_bomon','id');
    }
}