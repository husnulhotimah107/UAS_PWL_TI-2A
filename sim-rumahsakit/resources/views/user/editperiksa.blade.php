@extends('layouts.appuser')

@section('kontenluas')
<h3>Edit Data Periksa </h3>
<hr>
<form action="/home/Updateperiksa" method="POST">
    {{ csrf_field() }}
    <div class=" form-group">
        <input type="hidden" name="id_periksa" value="{{ $periksa['id_periksa'] }}" required class="form-control" placeholder="Masukan Nama periksa">
        <label for="exampleFormControlSelect1">Nama</label>
        <select class="form-control" name="id_user" required>
            <optgroup label="Pilih Pasien">
                @foreach($user as $u)
                <option value="{{ $u['id_user']}}">{{ $u['nama'] }}</option>
                @endforeach
            </optgroup>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Keluhan</label>
        <input type="text" class="form-control" value="{{ $periksa['keluhan'] }}" name="keluhan" placeholder="Masukan Keluhan">
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
        <input type="date" class="form-control" name="tglperiksa" value="{{ $periksa['tglperiksa'] }}">
    </div>

    <input type="submit" value="Edit Data" class="btn btn-danger btn-md float-right">
    <a href="/home/periksa" class="btn btn-success btn-md float-right">Kembali</a>
</form>
@endsection