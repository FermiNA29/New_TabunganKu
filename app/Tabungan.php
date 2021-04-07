<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tabungan extends Model
{
    protected $fillable = ['nama','jadwalNabung','nominal','idAkun'];

    public $timestamps = false;
}
