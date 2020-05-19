@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h3>
                        <center>
                            Sistem Informasi Rumah Sakit<br>
                            <img src="{{URL::asset('img/logo.png')}}" style="margin-top:50px;" width="180px" alt="">
                            <br>
                            <br>
                            <br>
                            <a href="/home/user" button type="button" class="btn btn-success">Data User</a>
                            <a href="/home/dokter" button type="button" class="btn btn-danger">Data Dokter</a>
                            <a href="/home/obatuser" button type="button" class="btn btn-warning">Data Obat</a>
                            <a href="/home/periksa" button type="button" class="btn btn-info">Data Periksa</a>
                            <a href="/home/transaksi" button type="button" class="btn btn-dark">Data Transaksi</a>
                            <br>
                            <br>
                        </center>
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection