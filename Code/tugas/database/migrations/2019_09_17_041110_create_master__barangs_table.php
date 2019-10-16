<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master__barangs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_barang');
            $table->string('Nama_Barang');
            $table->integer('jumlah');
            $table->string('jenis');
            $table->string('deskripsi_barang');
            $table->date('tgl_masuk');
            $table->string('status_barang');
            $table->string('posisi_barang');
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
        Schema::dropIfExists('master__barangs');
    }
}
