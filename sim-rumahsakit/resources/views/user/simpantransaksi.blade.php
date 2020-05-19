@extends('layouts.appuser')

@section('kontenluas')
<div class="card">
    <h5 class="card-header" style="background-color: #800000 ;color:white">Data Sukses Ditambahkan</h5>
    <div class="card-body">
        <h5 class="card-title">{{ $data->nama }}</h5>
        <p class="card-text">
            <b>Biaya : </b>{{ $data->biaya }} <br>
            <b>Tanggal Transaksi : </b> {{ $data->tgl_transaksi }} <br>
        </p>
        <a href="/home/transaksi" class="btn btn-danger">Kembali ke Daftar Transaksi</a>
    </div>
</div>
@endsection