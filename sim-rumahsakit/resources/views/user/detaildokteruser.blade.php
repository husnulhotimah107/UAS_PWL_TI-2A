@extends('layouts.appuser')

@section('kontenluas')
<h3>Detail dokter</h3>
<hr>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<table class="table table-bordered">
    <thead class="thead-dark">
        <th>Nama dokter</th>
        <th>Alamat dokter</th>
        <th>No Hp</th>
        <th>Spesialis Dokter</th>
    </thead>
    <tbody>
        @foreach($dokter as $d)
        <tr>
            <td>{{ $d['nama_dok'] }}</td>
            <td>{{ $d['alamat_dok'] }}</td>
            <td>{{ $d['no_telp_dok'] }}</td>
            <td>{{ $d['spesialis_dok'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/home/dokter" class="btn btn-danger">Kembali ke Daftar Dokter</a>
@endsection