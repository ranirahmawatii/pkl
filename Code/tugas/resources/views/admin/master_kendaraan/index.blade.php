@extends('home')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Master kendaraan</div>
                <br>
                <center><a href="{{ route('Master_Kendaraan.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                        tr>
                                <th>Id Kendaraan</th>
                                <th>nama kendaraan</th>
                                <th>jenis</th>
                                <th>merk</th>
                                <th>type</th>
                                <th>no polisi</th>
                                <th>tahun pembuatan</th>
                                <th>tgl pajak</th>
                                <th>tgl pajak 5thn</th>
                                <th>tgl pembelian</th>
                                <th>status kendaraan</th>
                                <th>kelengkapan</th>
                                <th>posisi</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($Master_Kendaraan as $data)
                <tr>
                    <td>{{ $data->id-kendaraan }}</td>
                    <td>{{ $data->Nama_Kendaraan }}</td>
                    <td>{{ $data->jenis }}</td>
                    <td>{{ $data->merk }}</td>
                    <td>{{ $data->type }}</td>
                     <td>{{ $data->no_polisi }}</td>
                    <td>{{ $data->tahun_pembuatan }}</td>
                    <td>{{ $data->tgl_pajak }}</td>
                    <td>{{ $data->tgl_pajak_5thn }}</td>
                    <td>{{ $data->tgl_pembelian }}</td>
                    <td>{{ $data->status_kendaraan }}</td>
                    <td>{{ $data->kelengkapan }}</td>
                    <td>{{ $data->posisi }}</td>
                    <td><a href="{{ route('Master_Kendaraan.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><form action="{{ route('Master_Kendaraan.destroy', $data->id) }}" method="post">
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