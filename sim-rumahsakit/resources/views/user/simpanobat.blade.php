@extends('layouts.appuser')

@section('kontenluas')
<div class="card">
    <h5 class="card-header" style="background-color: #800000 ;color:white">Data Sukses Ditambahkan</h5>
    <div class="card-body">
        <h5 class="card-title">{{ $data->nama_obat }}</h5>
        <p class="card-text">
            <b>jenis obat : </b>{{ $data->jenis_obat }} <br>
            <b>Stok Obat : </b> {{ $data->stok_obat }} <br>
        </p>
        <a href="/home/obatuser" class="btn btn-danger">Kembali ke Daftar obat</a>
    </div>
</div>
@endsection