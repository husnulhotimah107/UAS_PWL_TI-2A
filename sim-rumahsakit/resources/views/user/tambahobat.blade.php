@extends('layouts.appuser')

@section('kontenluas')
<h3>Tambah Obat Baru</h3>
<hr>
<form action="/home/userSimpanobat" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Obat</label>
    <input type="text" name="nama_obat" required class="form-control" placeholder="Masukan Nama Obat">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Jenis Obat</label>
    <input type="text" class="form-control" name="jenis_obat" placeholder="Masukan Jenis Obat">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Stok Obat</label>
    <input type="text" class="form-control" name="stok_obat" placeholder="Masukan Stok Obat">
  </div>
  <input type="submit" value="Tambah Data" class="btn btn-danger">
</form>
@endsection