@extends('layouts.appuser')

@section('kontenluas')
<h3>Daftar Transaksi di Rumah Sakit</h3>
<hr>
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<a href="/home/tambahtransaksi" class="btn btn-danger">Tambah Data Transaksi</a><br><br>
<table class="table table-bordered" id="listtransaksi">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama Pasien</th>
            <th>Nama Dokter</th>
            <th>Nama Obat</th>
            <th>Biaya</th>
            <th>Tanggal Transaksi</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($transaksi as $t)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $t['nama'] }}</td>
            <td>{{ $t['nama_dok'] }}</td>
            <td>{{ $t['nama_obat'] }}</td>
            <td>{{ $t['biaya'] }}</td>
            <td>{{ $t['tgl_transaksi'] }}</td>
            <td>
                <a href="/home/edittransaksi/{{ $t['id_transaksi'] }}" class="badge badge-success">Edit</a>
                <a href="/home/deletetransaksi/{{ $t['id_transaksi'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $t['nama'] }}?');" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection