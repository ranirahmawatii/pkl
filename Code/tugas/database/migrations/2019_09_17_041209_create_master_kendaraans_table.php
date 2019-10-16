<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterKendaraansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_kendaraans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_kendaraan');
            $table->string('jenis');
            $table->string('merk');
            $table->string('type');
            $table->string('no_polisi');
            $table->date('tahun_pembuatan');
            $table->date('tgl_pajak');
            $table->date('tgl_pajak_5thn');
            $table->date('tgl_pembelian');
            $table->string('status_kendaraan');
            $table->string('kelengkapan');
            $table->string('posisi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_kendaraans');
    }
}
