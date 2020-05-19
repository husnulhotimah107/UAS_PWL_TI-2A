@extends('layouts.appuser')

@section('kontenluas')
<h3>Edit Data dokter </h3>
<hr>
<form action="/home/userUpdatedokter" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <input type="hidden" class="form-control" value="{{ $dokter['id_dok'] }}" name="id_dok" required placeholder="Masukan Nama dokter">
    <label for="exampleInputEmail1">Nama dokter</label>
    <input type="text" class="form-control" value="{{ $dokter['nama_dok'] }}" name="nama_dok" required placeholder="Masukan Nama dokter">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">alamat dokter</label>
    <input type="text" class="form-control" value="{{ $dokter['alamat_dok'] }}" name="alamat_dok" required placeholder="Masukan alamat_dok dokter">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">nohp dokter</label>
    <input type="text" class="form-control" name="no_telp_dok" value="{{ $dokter['no_telp_dok'] }}" required placeholder="Masukan Alamat Lengkap">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Spesialis</label>
    <input type="text" class="form-control" name="spesialis_dok" value="{{ $dokter['spesialis_dok'] }}" required placeholder="Masukan Rata Rata Un">
  </div>
  <small>* Contoh <b>39.31</b> (Menggunakan Titik)</small><br>

  <a href="/home/dokter" class="btn btn-success">Kembali</a>
  <input type="submit" value="Edit Data" class="btn btn-danger">
</form>
@endsection