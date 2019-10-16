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
                <div class="card-header">Mengubah Data Master Jenis</div>
                <div class="card-body">
                    <form action="{{ route('Master_Jenis.update', $Master_Jenis->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">id Jenis</label>
                        <input class="form-control" value="{{ $Master_Jenis->id_jenis}}" type="text" name="id_jenis" id="">
                        </div>
                        <div class="form-group">
                            <label for="">Jenis</label>
                            <input class="form-control" value="{{ $Master_Jenis->jenis}}" type="text" name="jenis" id="">
                        </div>
                        <div class="form-group">
                            <label for="">keterangan</label>
                            <input class="form-control" value="{{ $Master_Jenis->keterangan}}" type="text" name="keterangan" id="">
                        </div>
                        <div class="form-group">
                            <label for="">status</label>
                            <input class="form-control" value="{{ $Master_Jenis->status}}" type="text" name="status" id=""> 
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