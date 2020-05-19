@extends('layouts.appuser')

@section('kontenluas')
<h3>Daftar Dokter di Rumah Sakit</h3>
<hr>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<a href="/home/userTambahdokter" class="btn btn-danger">Tambah Data dokter</a><br><br>
<table class="table table-bordered" id="listdokter">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Spesialis</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($dokter as $d)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $d['nama_dok'] }}</td>
            <td>{{ $d['spesialis_dok'] }}</td>
            <td>
                <a href="/home/userEditdokter/{{ $d['id_dok'] }}" class="badge badge-success">Edit</a>
                <a href="/home/userDetaildokter/{{ $d['id_dok'] }}" class="badge badge-info">Detail</a>
                <a href="/home/userDeletedokter/{{ $d['id_dok'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $d['nama_dok'] }}?');" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection