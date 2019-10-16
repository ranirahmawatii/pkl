<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Master_kendaraan;
use Session;
use Auth;
class Master_KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Master_Kendaraan = Master_Kendaraan::all();
        return view('admin.Master_Kendaraan.index', compact('Master_Kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Master_Kendaraan = Master_Kendaraan::all();
        return view('admin.Master_Kendaraan.create', compact('Master_Kendaraan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Master_Kendaraan = new Master_Kendaraan();
        $Master_Kendaraan->id_kendaraan = $request->id_kendaraan;
        $Master_Kendaraan->Nama_Kendaraan = $request->Nama_Kendaraan;
        $Master_Kendaraan->jenis = $request->jenis;
        $Master_Kendaraan->Merk = $request->merk;
        $Master_Kendaraan->Type = $request->type;
        $Master_Kendaraan->no_polisi = $request->no_polisi;
        $Master_Kendaraan->tahun_pembuatan = $request->tahun_pembuatan;
        $Master_Kendaraan->tgl_pajak = $request->tgl_pajak;
        $Master_Kendaraan->tgl_pajak_5thn = $request->tgl_pajak_5thn;
        $Master_Kendaraan->tgl_pembelian = $request->tgl_pembelian;
        $Master_Kendaraan->status_kendaraan = $request->status_kendaraan;
        $Master_Kendaraan->kelengkapan = $request->kelengkapan;
        $Master_Kendaraan->posisi = $request->posisi;
        $Master_Kendaraan->save();
        $response = [
            'success' => true,
            'data' => $Master_Kendaraan,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('Master_Kendaraan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Master_Kendaraan = Master_Kendaraan::findOrFail($id);
        return view('admin.Master_Kendaraan.show', compact('Master_Kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Master_Kendaraan = Master_Kendaraan::findOrFail($id);
        return view('admin.Master_Kendaraan.edit', compact('Master_Kendaraan'));
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
        $request->validate([
            'id_kendaraan' => 'required',
        ]);
        $Master_Kendaraan = Master_Kendaraan::findOrFail($id);
        $Master_Kendaraan->id_kendaraan = $request->id_kendaraan;
        $Master_Kendaraan->slug = str_slug($request->id_kendaraan, '-');
        $Master_Kendaraan->save();
        Session::flash("flash_notification", [
            "level" => "primary",
            "message" => "Berhasil mengubah menjadi Kategori <b>$Master_Kendaraan->id_kendaraan</b>!"
        ]);
        return redirect()->route('Master_Kendaraan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Master_Kendaraan = Master_Kendaraan::findOrFail($id);
        $old = $Master_Kendaraan->id_jenis;
        $Master_Kendaraan->delete();
        return redirect()->route('Master_Kendaraan.index');
    }
}
