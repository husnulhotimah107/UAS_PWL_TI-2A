@extends('layouts.appuser')

@section('kontenluas')
<h3>Detail User</h3>
<hr>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<table class="table table-bordered">
    <thead class="thead-dark">
        <th>Nama</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Level</th>
        <th>Status</th>
    </thead>
    <tbody>
        @foreach($user as $u)
        <tr>
            <td>{{ $u['nama'] }}</td>
            <td>{{ $u['username'] }}</td>
            <td>{{ $u['email'] }}</td>
            <td>{{ $u['password'] }}</td>
            <td>{{ $u['level'] }}</td>
            <td>{{ $u['status'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/home/user" class="btn btn-danger">Kembali ke Daftar User</a>
@endsection