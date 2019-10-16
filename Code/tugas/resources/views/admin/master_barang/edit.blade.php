@extends('home')
@section('css')
<link rel="stylesheet" href="{{asset('assets/admin/dist/css/AdminLTE.min.css')}}">
@endsection

@section('js')
<script src="{{asset('assets/admin/dist/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/admin/dist/js/pages/dashboard.js')}}"></script>
<script src="{{asset('assets/adminlte/dist/js/demo.js')}}"></script>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Master Barang</div>
                <div class="card-body">
                    <form action="{{ route('Master_Barang.update', $Master_Barang->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">nama barang</label>
                            <input class="form-control" value="{{ $Master_Barang->Nama_Barang}}" type="text" name="Nama_Barang" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah</label>
                            <input class="form-control" value="{{ $Master_Barang->jumlah}}"type="text" name="jumlah" id="">
                        </div>
                        <div class="form-group">
                            <label for="">jenis</label>
                            <input class="form-control" value="{{ $Master_Barang->jenis}}"type="text" name="jenis" id="">
                        </div>
                        <div class="form-group">
                            <label for="">deskripsi Barang</label>
                            <input class="form-control" value="{{ $Master_Barang->deskripsi_barang}}"type="text" name="deskripsi_barang" id="">
                        </div>
                        <div class="form-group">
                            <label for="">tanggal Masuk</label>
                            <input class="form-control" value="{{ $Master_Barang->tgl_masuk}}"type="date" name="tgl_masuk" id="">
                        </div>
                        <div class="form-group">
                            <label for="">status Barang</label>
                            <input class="form-control" value="{{ $Master_Barang->status_barang}}"type="text" name="status_barang" id="">
                        </div>
                        <div class="form-group">
                            <label for="">posisi Barang</label>
                            <input class="form-control" value="{{ $Master_Barang->posisi_barang}}"type="text" name="posisi_barang" id="">
                        </div>
                  
                        <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
@endsection