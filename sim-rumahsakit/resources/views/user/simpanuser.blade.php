@extends('layouts.appuser')

@section('kontenluas')
<div class="card">
    <h5 class="card-header" style="background-color: #800000 ;color:white">Data Sukses Ditambahkan</h5>
    <div class="card-body">
        <h5 class="card-title">{{ $data->nama }}</h5>
        <p class="card-text">
            <b>Username : </b>{{ $data->username }} <br>
            <b>Level : </b> {{ $data->level }} <br>
        </p>
        <a href="/home/user" class="btn btn-danger">Kembali ke Daftar User</a>
    </div>
</div>
@endsection