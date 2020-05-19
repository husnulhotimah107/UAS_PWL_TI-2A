@extends('layouts.appuser')

@section('kontenluas')
<div class="card">
    <h5 class="card-header" style="background-color: #800000 ;color:white">Data Sukses Ditambahkan</h5>
    <div class="card-body">
        <h5 class="card-title">{{ $data->nama }}</h5>
        <p class="card-text">
            <b>Keluhan : </b>{{ $data->keluhan }} <br>
            <b>Tanggal Periksa : </b> {{ $data->tglperiksa }} <br>
        </p>
        <a href="/home/periksa" class="btn btn-danger">Kembali ke Daftar Periksa</a>
    </div>
</div>
@endsection