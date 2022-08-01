@extends('layout.master')
@section('content')
    <a href="{{route('departemen.create')}}" class="btn btn-warning">Tambah Data Departemen</a>
    <a href="#" class="btn btn-outline-danger">PDF</a>
    <a href="#" class="btn btn-outline-success">Excel</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($departemens as $departemen)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$departemen->nama}}</td>
                    <td>
                        <a href="{{route('departemen.edit', $departemen->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('departemen.destroy', $departemen->id)}}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection