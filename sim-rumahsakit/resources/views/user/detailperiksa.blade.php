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
        <tr>
            <th>Nama Pasien</th>
            <th>Keluhan</th>
            <th>Nama Dokter</th>
            <th>Tanggal Periksa</th>
        </tr>
    </thead>
    <tbody>
        @foreach($periksa as $p)
        <tr>
            <td>{{ $p['nama'] }}</td>
            <td>{{ $p['keluhan'] }}</td>
            <td>{{ $p['nama_dok'] }}</td>
            <td>{{ $p['tglperiksa'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/home/obatuser" class="btn btn-danger">Kembali ke Daftar obat</a>
@endsection