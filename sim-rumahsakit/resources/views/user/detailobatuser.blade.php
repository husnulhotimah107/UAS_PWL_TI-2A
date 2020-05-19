@extends('layouts.appuser')

@section('kontenluas')
<h3>Detail obat</h3>
<hr>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<table class="table table-bordered">
    <thead class="thead-dark">
        <th>Nama Obat</th>
        <th>Jenis Obat</th>
        <th>Stok Obat</th>
    </thead>
    <tbody>
        @foreach($obat as $o)
        <tr>
            <td>{{ $o['nama_obat'] }}</td>
            <td>{{ $o['jenis_obat'] }}</td>
            <td>{{ $o['stok_obat'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/home/obatuser" class="btn btn-danger">Kembali ke Daftar obat</a>
@endsection