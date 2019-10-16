<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Master_jenis;
use Session;
use Auth;

class Master_JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Master_Jenis = Master_Jenis::all();
        return view('admin.master_jenis.index', compact('Master_Jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Master_Jenis = Master_Jenis::all();
        return view('admin.master_jenis.create', compact('Master_Jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Master_Jenis = new Master_Jenis();
        $Master_Jenis->id_jenis = $request->id_jenis;
        $Master_Jenis->jenis = $request->jenis;
        $Master_Jenis->keterangan = $request->keterangan;
        $Master_Jenis->status = $request->status;
        $Master_Jenis->save();
        $response = [
            'success' => true,
            'data' => $Master_Jenis,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('Master_Jenis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Master_Jenis = Master_Jenis::findOrFail($id);
        return view('admin.master_jenis.show', compact('Master_Jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Master_Jenis = Master_Jenis::findOrFail($id);
        return view('admin.master_jenis.edit', compact('Master_Jenis'));
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
        $Master_Jenis = Master_Jenis::findOrFail($id);
        $Master_Jenis->id_jenis = $request->id_jenis;
        $Master_Jenis->jenis = $request->jenis;
        $Master_Jenis->keterangan = $request->keterangan;
        $Master_Jenis->status = $request->status;
        $Master_Jenis->save();
        $response = [
            'success' => true,
            'data' => $Master_Jenis,
            'message' => 'berhasil di tambahkan.'
        ];
        return redirect()->route('Master_Jenis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Master_Jenis = Master_Jenis::findOrFail($id);
        $old = $Master_Jenis->id_jenis;
        $Master_Jenis->delete();
        return redirect()->route('Master_Jenis.index');
    }
}
