@extends('layouts.appuser')

@section('kontenluas')
<h3>Edit User</h3>
<hr>
<form action="/home/Updateuser" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Nama</label>
        <input type="hidden" name="id_user" value="{{ $user['id_user'] }}" required class="form-control" placeholder="Masukan Nama User">
        <input type="text" name="nama" value="{{ $user['nama'] }}" required class="form-control" placeholder="Masukan Nama User">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Username</label>
        <input type="text" class="form-control" value="{{ $user['username'] }}" name="username" placeholder="Masukan Username">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Masukan Email">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Password</label>
        <input type="password" class="form-control" value="{{ $user['password'] }}" name="password" placeholder="Masukan Password">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Level</label>
        <input type="text" class="form-control" value="{{ $user['level'] }}" name="level" placeholder="Masukan Level">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Status</label>
        <input type="text" class="form-control" value="{{ $user['status'] }}" name="status" placeholder="Masukan Status">
    </div>
    <a href="/home/user" class="btn btn-success">Kembali</a>
    <input type="submit" value="Edit Data" class="btn btn-danger">
</form>
@endsection