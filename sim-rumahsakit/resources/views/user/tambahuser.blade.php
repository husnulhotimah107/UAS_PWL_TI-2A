@extends('layouts.appuser')

@section('kontenluas')
<h3>Tambah User Baru</h3>
<hr>
<form action="/home/simpanuser" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="text" name="nama" required class="form-control" placeholder="Masukan Nama">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" name="username" placeholder="Masukan username">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Masukan Email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Masukan Password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Level</label>
        <input type="text" class="form-control" name="level" placeholder="Masukan Level">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
        <input type="text" class="form-control" name="status" placeholder="Masukan Status">
    </div>
    <input type="submit" value="Tambah Data" class="btn btn-danger">
</form>
@endsection