<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sachdaxuatbans extends Model
{
    //
    protected $table = "sachdaxuatbans";

    protected $fillable = ['id','id_bomon','url'];

    public $timestamps = true;
    public function bomons()
    {
        return $this->belongsTo('App\bomons','id_bomon','id');
    }
}