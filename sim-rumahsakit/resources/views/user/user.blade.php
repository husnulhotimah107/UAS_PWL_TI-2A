@extends('layouts.appuser')

@section('kontenluas')
<h3>Daftar User di Rumah Sakit</h3>
<hr>
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
<a href="/home/Tambahuser" class="btn btn-danger">Tambah Data User</a><br><br>
<table class="table table-bordered" id="listobat">
    <thead class="thead-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1 ?>
        @foreach($user as $u)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $u['nama'] }}</td>
            <td>{{ $u['email'] }}</td>
            <td>{{ $u['status'] }}</td>
            <td>
                <a href="/home/Edituser/{{ $u['id_user'] }}" class="badge badge-success">Edit</a>
                <a href="/home/detailUser/{{ $u['id_user'] }}" class="badge badge-info">Detail</a>
                <a href="/home/Deleteuser/{{ $u['id_user'] }}" onclick="return confirm('Apakah Anda Ingin Menghapus {{ $u['nama'] }}?');" class="badge badge-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection