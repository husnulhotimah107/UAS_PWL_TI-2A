@extends('layouts.appuser')

@section('kontenluas')
<div class="card">
    <h5 class="card-header" style="background-color: #800000 ;color:white">Data Sukses Ditambahkan</h5>
    <div class="card-body">
        <h5 class="card-title">{{ $data->nama_dok}}</h5>
        <p class="card-text">
            <b>Alamat dokter: </b>{{ $data->alamat_dok}} <br>
            <b>No Hp : </b> {{ $data->no_telp_dok }} <br>
            <b>Spesialis : </b> {{ $data->spesialis_dok }} <br>
        </p>
        <a href="/home/dokter" class="btn btn-danger">Kembali ke Daftar Dokter</a>
    </div>
</div>
@endsection