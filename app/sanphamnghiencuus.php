<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sanphamnghiencuus extends Model
{
    //
    protected $table = "sanphamnghiencuus";

    protected $fillable = ['id','id_bomon','tendetai','nam','url'];

    public $timestamps = true;
    public function bomons()
    {
        return $this->belongsTo('App\bomons','id_bomon','id');
    }
}