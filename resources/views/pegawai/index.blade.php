@extends('layout.master')
@section('content')
    <a href="#" class="btn btn-outline-danger">PDF</a>
    <a href="#" class="btn btn-outline-success">Excel</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Departemen</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($pegawais as $pegawai)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$pegawai->id}}</td>
                    <td>{{$pegawai->nama}}</td>
                    <td>{{$pegawai->departemen->nama}}</td>
                    <td>
                        <a href="{{route('pegawai.edit', $pegawai->id)}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('pegawai.destroy', $pegawai->id)}}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection