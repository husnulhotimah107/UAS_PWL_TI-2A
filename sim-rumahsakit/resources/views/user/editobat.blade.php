@extends('layouts.appuser')

@section('kontenluas')
<h3>Edit obat</h3>
<hr>
<form action="/home/userUpdateobat" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nama obat</label>
    <input type="hidden" name="id_obat" value="{{ $obat['id_obat'] }}" required class="form-control" placeholder="Masukan Nama obat">
    <input type="text" name="nama_obat" value="{{ $obat['nama_obat'] }}" required class="form-control" placeholder="Masukan Nama obat">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">jenis obat</label>
    <input type="text" class="form-control" value="{{ $obat['jenis_obat'] }}" name="jenis_obat" placeholder="Masukan jenis obat">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Stok Obat</label>
    <input type="text" class="form-control" value="{{ $obat['stok_obat'] }}" name="stok_obat" placeholder="Masukan Kota Kabupaten obat">
  </div>
  
  <a href="/home/obatuser" class="btn btn-success">Kembali</a>
  <input type="submit" value="Edit Data" class="btn btn-danger">
</form>
@endsection