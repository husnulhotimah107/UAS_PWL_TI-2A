@extends('layouts.appuser')

@section('kontenluas')
<h3>Tambah Data Transaksi</h3>
<hr>
<form action="/home/simpantransaksi" method="POST">
    {{ csrf_field() }}
    <div class=" form-group">
        <label for="exampleFormControlSelect1">Nama</label>
        <select class="form-control" name="id_user" required>
            <optgroup label="Pilih User">
                @foreach($periksa as $p)
                <option value="{{ $p['id_periksa']}}">{{ $p['nama'] }}</option>
                @endforeach
            </optgroup>
        </select>
    </div>

    <div class=" form-group">
        <label for="exampleFormControlSelect1">Nama Dokter</label>
        <select class="form-control" name="id_dok" required>
            <optgroup label="Pilih Dokter">
                @foreach($dokter as $dok)
                <option value="{{ $dok['id_dok']}}">{{ $dok['nama_dok'] }} - {{ $dok['spesialis_dok'] }}</option>
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
        <input type="text" class="form-control" name="biaya">
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Transaksi</label>
        <input type="date" class="form-control" name="tgl_transaksi">
    </div>

    <input type="submit" value="Tambah Data" class="btn btn-danger btn-md float-right">
</form>
@endsection