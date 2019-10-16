@extends('home')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Master Barang</div>
                <br>
                <center><a href="{{ route('Master_Barang.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Id_barang</th>
                                <th>Nama barang</th>
                                <th>Jumlah</th>
                                <th>jenis</th>
                                <th>deskripsi_barang</th>
                                <th>tgl_masuk</th>
                                <th>status_barang</th>
                                <th>posisi_barang</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($Master_Barang as $data)
                <tr>
                <td>{{ $data->id_barang }}</td>
                    <td>{{ $data->Nama_barang }}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td>{{ $data->jenis }}</td>
                    <td>{{ $data->deskripsi_barang }}</td>
                    <td>{{ $data->tgl_masuk }}</td>
                    <td>{{ $data->status_barang }}</td>
                    <td>{{ $data->posisi_barang }}</td>
                    <td><a href="{{ route('Master_Barang.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><form action="{{ route('Master_Barang.destroy', $data->id) }}" method="post">
                            {{ csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection