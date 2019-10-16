@extends('home')

@section('css')
<link rel="stylesheet" href="{{asset('assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/admin/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('assets/admin/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('assets/admin/dist/css/skins/_all-skins.min.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('assets/admin/bower_components/morris.js/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('assets/admin/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('assets/admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  @endsection

  @section('js')
  <script src="{{asset('assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('assets/admin/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/admin/bower_components/morris.js/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('assets/admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('assets/admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('assets/admin/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('assets/admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/admin/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('assets/admin/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/adminlte/dist/js/demo.js')}}"></script>
</body>
  @endsection

  @section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah Master Kendaraan</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('Master_Kendaraan.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                            <label for="">id kendaraan</label>
                            <input class="form-control" type="text" name="id_kendaraan" id="">
                        </div>
                        <div class="form-group">
                            <label for="">namakendaraan</label>
                            <input class="form-control" type="text" name="Nama_Kendaraan" id="">
                        </div>
                        <div class="form-group">
                            <label for="">jenis</label>
                            <input class="form-control" type="text" name="jenis" id="">
                        </div>
                        <div class="form-group">
                            <label for="">merk</label>
                            <input class="form-control" type="text" name="merk" id="">
                        </div>
                        <div class="form-group">
                            <label for="">type</label>
                            <input class="form-control" type="text" name="type" id="">
                        </div>
                        <div class="form-group">
                            <label for="">no polisi</label>
                            <input class="form-control" type="text" name="no_polisi" id="">
                        </div>
                        <div class="form-group">
                            <label for="">tahun pembuatan</label>
                            <input class="form-control" type="date" date="tahun_pembuatan" id="">
                        </div>
                        <div class="form-group">
                            <label for="">tgl pajak</label>
                            <input class="form-control" type="date" date="tgl_pajak" id="">
                        </div>

                        <div class="form-group">
                            <label for="">tgl pajak 5thn</label>
                            <input class="form-control" type="date" date="tgl_pajak_5thn" id="">
                        </div>
                        <div class="form-group">
                            <label for="">tgl_pembelian</label>
                            <input class="form-control" type="date" nadateme="tgl_pembelian" id="">
                        </div>
                        <div class="form-group">
                            <label for="">status_kendaraan</label>
                            <input class="form-control" type="text" name="status_kendaraan" id="">
                        </div>
                        <div class="form-group">
                            <label for="">kelengkapaan</label>
                            <input class="form-control" type="text" name="kelengkapaan" id="">
                        </div>
                        <div class="form-group">
                            <label for="">posisi</label>
                            <input class="form-control" type="text" name="posisi" id="">
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
