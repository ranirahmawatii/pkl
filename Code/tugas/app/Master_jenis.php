<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_jenis extends Model
{
    protected $filelabe= ['id_jenis', 'jenis','keterangan', 'status'];
    public $timetamps = true;
}
