@extends('layout.master')
@section('content')
    <a href="{{route('user.create')}}" class="btn btn-warning">Tambah User</a>
    <a href="#" class="btn btn-outline-danger">PDF</a>
    <a href="#" class="btn btn-outline-success">Excel</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($users as $user)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('user.destroy', $user->id)}}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection