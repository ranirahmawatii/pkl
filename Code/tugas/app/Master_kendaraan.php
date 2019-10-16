<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Master_kendaraan extends Model
{
    protected $filelabe= ['id_kendaraan', 'Nama_Kendaraan' , 'jenis', 'merk', 'type', 'no_polisi', 'tahun_pembuatan',
    'tgl_pajak', 'tgl_pajak_5thn', 'tgl_pembelian', 'status_kendaraan', 'kelengkapan', 'posisi'];
    public $timetamps = true;
}
