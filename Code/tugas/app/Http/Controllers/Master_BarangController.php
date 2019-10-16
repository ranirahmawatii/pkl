<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Master_Barang;
use Session;
use Auth;

class Master_BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $Master_Barang = Master_Barang::all();
        return view('admin.master_barang.index', compact('Master_Barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Master_Barang = Master_Barang::all();
        return view('admin.master_barang.create', compact('Master_Barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Master_Barang = new Master_Barang();
        $Master_Barang->id_barang = $request->id_barang;
        $Master_Barang->Nama_Barang = $request->Nama_Barang;
        $Master_Barang->jumlah = $request->jumlah;
        $Master_Barang->jenis = $request->jenis;
        $Master_Barang->deskripsi_barang = $request->deskripsi_barang;
        $Master_Barang->tgl_masuk = $request->tgl_masuk;
        $Master_Barang->status_barang = $request->status_barang;
        $Master_Barang->posisi_barang = $request->posisi_barang;
        $Master_Barang->save();
        $response = [
            'success' => true,
            'data' => $Master_Barang,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('Master_Barang.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Master_Barang = Master_Barang::findOrFail($id);
        return view('admin.master_barang.show', compact('Master_Barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {  
        $Master_Barang = Master_Barang::findOrFail($id);
        return view('admin.master_barang.edit', compact('Master_Barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Master_Barang = Master_Barang::findOrFail($id);
        $Master_Barang->id_barang = $request->id_barang;
        $Master_Barang->Nama_Barang = $request->Nama_Barang;
        $Master_Barang->jumlah = $request->jumlah;
        $Master_Barang->jenis = $request->jenis;
        $Master_Barang->deskripsi_barang = $request->deskripsi_barang;
        $Master_Barang->tgl_masuk = $request->tgl_masuk;
        $Master_Barang->status_barang = $request->status_barang;
        $Master_Barang->posisi_barang = $request->posisi_barang;
        $Master_Barang->save();
        $response = [
            'success' => true,
            'data' => $Master_Barang,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('Master_Barang.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Master_Barang = Master_Barang::findOrFail($id);
        $old = $Master_Barang->id_barang;
        $Master_Barang->delete();
        return redirect()->route('Master_Barang.index');
    }
}