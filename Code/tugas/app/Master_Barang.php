<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_Barang extends Model
{
    protected $filelabe= ['id_barang','Nama_barang', 'jumlah' , 'jenis', 'deskripsi_barang', 'tgl_masuk', 'status_barang', 'posisi_barang'];
    public $timetamps = true;
}
