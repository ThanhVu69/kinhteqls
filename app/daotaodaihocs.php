<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daotaodaihocs extends Model
{
    protected $table = "daotaodaihocs";

    protected $fillable = ['id','gioithieuchung','bieudokehoach','url'];

    public $timestamps = true;
    public function canbogiangviens()
    {
        return $this->hasMany('App\chuongtrinhdaotaos','id_daotao','id');
    }
}
