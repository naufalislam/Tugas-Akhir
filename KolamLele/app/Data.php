<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    //
    protected $table='datas';
    protected $fillable =['ph','suhu1','suhu2','suhu3','suhu4','kolam'];
}
