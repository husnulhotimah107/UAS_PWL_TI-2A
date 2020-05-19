@extends('layouts.appuser')

@section('kontenluas')
<h3>Daftar Obat di Rumah Sakit</h3>
<hr>
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<a href="/home/userTambahobat" class="btn btn-danger">Tambah Data obat</a><br><br>
<table class="table table-bordered" id="listobat">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama obat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($obat as $o)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $o['nama_obat'] }}</td>
            <td>
                <a href="/home/userEditobat/{{ $o['id_obat'] }}" class="badge badge-success">Edit</a>
                <a href="/home/userDetailobat/{{ $o['id_obat'] }}" class="badge badge-info">Detail</a>
                <a href="/home/userDeleteobat/{{ $o['id_obat'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $o['nama_obat'] }}?');" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection