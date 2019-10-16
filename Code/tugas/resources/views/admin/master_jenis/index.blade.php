@extends('home')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Master Jenis</div>
                <br>
                <center><a href="{{ route('Master_Jenis.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>Id jenis</th>
                                <th>Jenis</th>
                                <th>Keterangan</th>
                                <th>status</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($Master_Jenis as $data)
                <tr>
                    <td>{{ $data->id_jenis }}</td>
                    <td>{{ $data->jenis }}</td>
                    <td>{{ $data->keterangan }}</td>
                    <td>{{ $data->status }}</td>
                    <td><a href="{{ route('Master_Jenis.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><form action="{{ route('Master_Jenis.destroy', $data->id) }}" method="post">
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