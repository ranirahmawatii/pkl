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
                        <div class="card-header">Tambah Master Barang</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('Master_Barang.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">id_barang</label>
                                <input class="form-control" type="text" name="id_barang" id="">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Barang</label>
                                <input class="form-control" type="text" name="Nama_Barang" id="">
                            </div>
                            <div class="form-group">
                                <label for="">jumlah</label>
                                <input class="form-control" type="text" name="jumlah" id="">
                            </div>
                            <div class="form-group">
                                <label for="">jenis</label>
                                <input class="form-control" type="text" name="jenis" id="">
                            </div>
                            <div class="form-group">
                                <label for="">deskripsi barang</label>
                                <input class="form-control" type="text" name="deskripsi_barang" id="">
                            </div>
                            <div class="form-group">
                                <label for="">tgl masuk</label>
                                <input class="form-control" type="date" name="tgl_masuk" id="">
                            </div>
                            <div class="form-group">
                                <label for="">status barang</label>
                                <input class="form-control" type="text" name="status_barang" id="">
                            </div>
                            <div class="form-group">
                                <label for="">posisi barang</label>
                                <input class="form-control" type="text" name="posisi_barang" id="">
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
