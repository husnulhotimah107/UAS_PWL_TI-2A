@extends('layouts.appuser')

@section('kontenluas')
<h3>Daftar Periksa di Rumah Sakit</h3>
<hr>
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<a href="/home/tambahperiksa" class="btn btn-danger">Tambah Data Periksa</a><br><br>
<table class="table table-bordered" id="listperiksa">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Keluhan</th>
            <th>Nama Dokter</th>
            <th>Tanggal Periksa</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($periksa as $p)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $p['nama'] }}</td>
            <td>{{ $p['keluhan'] }}</td>
            <td>{{ $p['nama_dok'] }}</td>
            <td>{{ $p['tglperiksa'] }}</td>
            <td>
                <a href="/home/editperiksa/{{ $p['id_periksa'] }}" class="badge badge-success">Edit</a>
                <a href="/home/Deleteperiksa/{{ $p['id_periksa'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $p['nama'] }}?');" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection