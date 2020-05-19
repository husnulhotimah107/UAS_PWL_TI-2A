@extends('layouts.appuser')

@section('kontenluas')
<h3>Edit Data Transaksi </h3>
<hr>
<form action="/home/Updatetransaksi" method="POST">
    {{ csrf_field() }}
    <div class=" form-group">
        <input type="hidden" name="id_transaksi" value="{{ $transaksi['id_transaksi'] }}">
        <label for="exampleFormControlSelect1">Nama</label>
        <select class="form-control" name="id_user" required>
            <optgroup label="Pilih Pasien">
                @foreach($user as $u)
                <option value="{{ $u['id_user']}}">{{ $u['nama'] }}</option>
                @endforeach
            </optgroup>
        </select>
    </div>

    <div class=" form-group">
        <label for="exampleFormControlSelect1">Nama Dokter</label>
        <select class="form-control" name="id_dok" required>
            <optgroup label="Pilih Dokter">
                @foreach($dokter as $dok)
                <option value="{{ $dok['id_dok']}}">{{ $dok['nama_dok'] }}</option>
                @endforeach
            </optgroup>
        </select>
    </div>

    <div class=" form-group">
        <label for="exampleFormControlSelect1">Nama Obat</label>
        <select class="form-control" name="id_obat" required>
            <optgroup label="Pilih Obat">
                @foreach($obat as $o)
                <option value="{{ $o['id_obat']}}">{{ $o['nama_obat'] }}</option>
                @endforeach
            </optgroup>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Biaya</label>
        <input type="text" class="form-control" name="biaya" value="{{ $transaksi['transaksi'] }}">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Transaksi</label>
        <input type="date" class="form-control" name="tgl_transaksi" value="{{ $transaksi['transaksi'] }}">
    </div>

    <input type="submit" value="Edit Data" class="btn btn-danger btn-md float-right">
    <a href="/home/transaksi" class="btn btn-success btn-md float-right">Kembali</a>
</form>
@endsection