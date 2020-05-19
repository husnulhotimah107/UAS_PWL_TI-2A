@extends('layouts.appuser')

@section('kontenluas')
<h3>Tambah dokter Baru</h3>
<hr>
<form action="/home/usersimpandokter" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Dokter</label>
    <input type="text" class="form-control" name="nama_dok" required placeholder="Masukan Nama Dokter">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat Dokter</label>
    <input type="text" class="form-control" name="alamat_dok" required placeholder="Masukan Alamat Dokter">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">No Telp</label>
    <input type="text" class="form-control" name="no_telp_dok" required placeholder="Masukan No Telp Dokter">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Spesialis</label>
    <input type="text" class="form-control" name="spesialis_dok" required placeholder="Masukan Spesialis Dokter">
  </div>

  <input type="submit" value="Tambah Data" class="btn btn-danger">
</form>
@endsection