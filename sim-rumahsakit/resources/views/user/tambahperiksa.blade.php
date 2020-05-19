@extends('layouts.appuser')

@section('kontenluas')
<h3>Tambah Data Periksa</h3>
<hr>
<form action="/home/simpanperiksa" method="POST">
    {{ csrf_field() }}
    <div class=" form-group">
        <label for="exampleFormControlSelect1">Nama</label>
        <select class="form-control" name="id_user" required>
            <optgroup label="Pilih User">
                @foreach($user as $u)
                <option value="{{ $u['id_user']}}">{{ $u['nama'] }}</option>
                @endforeach
            </optgroup>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Keluhan</label>
        <input type="text" class="form-control" name="keluhan">
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

    <div class="form-group">
        <label for="exampleInputEmail1">Tanggal Periksa</label>
        <input type="date" class="form-control" name="tglperiksa">
    </div>

    <a href="/home/periksa" class="btn btn-success">Kembali</a>
    <input type="submit" value="Tambah Data" class="btn btn-danger btn-md float-right">
</form>
@endsection